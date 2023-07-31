<?php

namespace App\Console\Commands;

use App\Http\Controllers\ApiController;
use App\Models\LuckyNumber;
use App\Models\User;
use App\Models\UserBet;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class GenerateRound extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:gen-round';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->endGame();
        $this->generateGames();
    }

    protected function endGame()
    {
        $nonhandleUsers = UserBet::where('trang_thai', 0)->get();
        if (empty($nonhandleUsers)) return false;


        foreach ($nonhandleUsers as $user)
        {
            $game = $this->getRoundResult($user->game_id);
            if (!$game)
            {
                //Log::error('game id ' . $user->game_id . ' failed to fetch.');
                continue;
            }
            $result = 'like';
            switch ($user->thao_tac)
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

            if (in_array($user->thao_tac, $game))
            {
                $user->update(['trang_thai' => 1]);
                $wallet = User::where('id', $user->user_id)->first()->getWallet();
                $wallet->changeMoney($user->so_luong * ApiController::getSetting( $result . '_multiply'), 'Shop cảm ơn vì đánh giá ' . $result, 1);
            }else{
                $user->update(['trang_thai' => 2]);
            }
        }
    }

    protected function getRoundResult($game_id)
    {
        $game_bet = LuckyNumber::where('game_id', $game_id)->first();
        if (empty($game_bet)) return false;

        if ($game_id > Carbon::now()->format('YmdHis')) return false;

        $numbers_array = explode("-", $game_bet->gia_tri);

        $like = [5,6,7,8,9];
        $sao_5 = [0,2,4,6,8];

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

        return $win_type;
    }

    protected function generateGames()
    {
        $lastRecord = LuckyNumber::latest()->first();
        if (empty($lastRecord)) {
            $lastRecord = new LuckyNumber();
            $lastRecord->game_id = Carbon::now()->format('YmdHi').'00';
            $lastRecord->gia_tri = rand(0, 9) . '-' . rand(0, 9) . '-' . rand(0, 9);
            $lastRecord->created_at = Carbon::now();
            $lastRecord->updated_at = Carbon::now();
            $lastRecord->save();
        }

        $currentTime = Carbon::now();
        $lastRecordTime = $lastRecord ? Carbon::createFromFormat('YmdHis', $lastRecord->game_id) : $currentTime;
        $timeDifference = $currentTime->diffInMinutes($lastRecordTime);

        $gameLength = ApiController::getSetting('game_length');
        $minutesInHour = 60;
        $numberOfGames = min($minutesInHour - $timeDifference, $minutesInHour / $gameLength);


        for ($i = 0; $i < $numberOfGames; $i++) {
            $nextId = $lastRecordTime->addMinutes($gameLength);
            $newRecord = new LuckyNumber();
            $newRecord->game_id = $nextId->format('YmdHis');
            $newRecord->gia_tri = rand(0, 9) . '-' . rand(0, 9) . '-' . rand(0, 9);
            $newRecord->created_at = $nextId;
            $newRecord->updated_at = $nextId;
            $newRecord->save();
        }

        $this->info('Generated ' . $numberOfGames . ' rows');
    }
}
