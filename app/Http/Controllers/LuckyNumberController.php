<?php

namespace App\Http\Controllers;

use App\Models\LuckyNumber;
use App\Models\User;
use App\Models\UserBet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Log;

class LuckyNumberController extends Controller
{
    public function view()
    {
        return view('lucky');
    }

    // pre-config side:
    // 1. like: 5 6 7 8 9
    // 2. vote: 0 1 2 3 4
    // 3. 5 sao: 0 2 4 6 8
    // 4. 3 sao: 1 3 5 7 9

    // Ô đầu: > 5 = Like | < 4 = vote
    // Ô cuối: 0, 2, 4 ,6 ,8 = 5 sao | 1, 3, 5, 7, 9 = 3 sao

    protected function getCurrentGame()
    {
        return LuckyNumber::latest()->first()->game_id;
    }

    protected function getBetType()
    {
        return array('like', 'vote', '5sao', '3sao');
    }

    protected function sideNameToNumber($side): int
    {
        $result = 0;
        switch ($side)
        {
            case 'like':
                $result = 1;
                break;
            case 'vote':
                $result = 2;
                break;
            case '5sao':
                $result = 3;
                break;
            case '3sao':
                $result = 4;
                break;
        }

        return $result;
    }

    public function doBet(Request $request)
    {
        try {
            $request->validate([
                'sideChoosed' => 'required|string',
                'amount' => 'required|numeric',
            ]);

            $side = $request->sideChoosed;
            $amount = $request->amount;

            if ($amount > Auth::user()->balance()) return ApiController::response(404, [], 'Số dư không đủ.');

            if (!preg_match('('.implode('|',$this->getBetType()).')', $side)) return ApiController::response(501, [], 'Request không hợp lệ.');

            DB::beginTransaction();
            $betQuery = new UserBet();
            $betQuery->game_id = $this->getCurrentGame();
            $betQuery->user_id = Auth::user()->id;
            $betQuery->thao_tac = $this->sideNameToNumber($side);
            $betQuery->so_luong = $amount;
            $betQuery->trang_thai = 0;
            $betQuery->save();
            DB::commit();

            $wallet = Auth::user()->getWallet();
            $wallet->changeMoney($amount, 'Đánh giá');

            return ApiController::response(200, [], 'Đánh giá thành công');
        } catch (\Exception $e)
        {
            DB::rollback();
            Log::error($e);
            return ApiController::response(502, [], 'Hệ thống đang gặp sự cố, vui lòng thử lại sau');
        }
    }

    public static function endGame(string $gameId)
    {
        try {
            $game_bet = LuckyNumber::where('game_id', $gameId)->first();
            $userBet = UserBet::where('game_id', $gameId);

            $numbers_array = explode("-", $game_bet->gia_tri);

            $win_type = [];

            $like = [5,6,7,8,9];
            $vote = [0,1,2,3,4];
            $sao_5 = [0,2,4,6,8];
            $sao_3 = [1,3,5,7,9];

            if (array_search($numbers_array[0], $like))
            {
                $win_type[] = 1;
            }else{
                $win_type[] = 2;
            }

            if (array_search($numbers_array[2], $sao_5))
            {
                $win_type[] = 3;
            }else{
                $win_type[] = 4;
            }

            Log::info('End game result: ID-'. $gameId . ': RESULT:' . json_encode($win_type));

            $userBetWin = $userBet->whereIn('thao_tac', $win_type)->get();

            foreach ($userBetWin as $winner)
            {
                $result = 'like';
                switch ($winner->thao_tac)
                {
                    case 1:
                        $result = 'like';
                        break;
                    case 2:
                        $result = 'vote';
                        break;
                    case 3:
                        $result = '5sao';
                        break;
                    case 4:
                        $result = '3sao';
                        break;
                }
                $winner->update(['trang_thai', 1]);
                $wallet = User::where('id', $winner->user_id)->first()->getWallet();
                $wallet->changeMoney($winner->so_luong * ApiController::getSetting( $result . '_multiply'), 'Shop cảm ơn vì đánh giá', 1);
            }

            return true;
        } catch (\Exception $e)
        {
            DB::rollback();
            Log::error($e);
            return false;
        }
    }
}
