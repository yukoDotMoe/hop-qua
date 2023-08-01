<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

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
}
