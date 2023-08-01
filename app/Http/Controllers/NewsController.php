<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function homeView()
    {
        return view('news');
    }

    public static function findPost($catName)
    {
        $posts = BaiViet::where('danh_muc', $catName);
        return $posts;
    }

    public function viewPost($id)
    {
        $post = BaiViet::where('post_id', $id)->first();
        return view('post', ['post' => $post]);
    }

    public function react(Request $request, $id)
    {
        $request->validate([
            'react' => 'required|numeric|min:1|max:2',
        ]);

        $reactType = $request->react;

        $react = Auth::user()->getReact($reactType);

        if (($react - 1) < 0) return ApiController::response(501, [],  ($reactType == 1) ? 'Hết lượt đánh giá.' : 'Hết lượt yêu thích.');

        $wallet = Auth::user()->getWallet();

        $wallet->changeIneract($reactType, 1, 'Thao tác với bài viết');

        $post = BaiViet::where('post_id', $id)->first();
        $post->increment(($reactType == 1) ? 'vote' : 'like', 1);
        if (empty($post->order) && $reactType == 1  ) $post->update(['order' => rand(2, 5)]);

        return ApiController::response(200, [], 'Thao tác thành công');
    }

    public function buyReact(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'type' => 'required|numeric|min:1|max:2',
        ]);
        $typeNum =  $request->type;
        $typeText = ($typeNum == 1) ? 'Vote' : 'Like';

        $amount = $request->amount;
        $amountInBal = $amount * ApiController::getSetting('interact_rate');
        if ($amountInBal > Auth::user()->balance()) return ApiController::response(501, [], 'Số dư của bạn không đủ.');
        $wallet = Auth::user()->getWallet();
        $wallet->changeMoney($amountInBal, 'Mua thao tác');
        $wallet->changeIneract($typeNum, $amount, 'Mua thao tác', 1);
        return ApiController::response(200, [], 'Mua ' . $amount . ' ' . $typeText . ' thành công.');
    }
}
