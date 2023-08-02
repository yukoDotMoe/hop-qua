<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use App\Models\LuckyNumber;
use App\Models\Settings;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginView()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->withErrors(['login_error' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        return view('admin.auth.dashboard');
    }

    public function settingsView()
    {
        return view('admin.auth.settings');
    }
    public function luckyGameView()
    {
        $current = LuckyNumber::where('game_id','<',Carbon::now()->format('YmdHis'))->orderBy('id', 'desc')->first();
        $nextGame = LuckyNumber::where('id', $current->id + 1)->first();
        $list = LuckyNumber::whereBetween('id', [$current->id+1, $current->id + 10])->get();
        return view('admin.auth.lucky_game', ['data' => $list, 'current' => $current, 'next' => $nextGame]);
    }

    public function luckyUpdate(Request $request)
    {
        $row = LuckyNumber::where('id', $request->id)->first();
        if (empty($row)) return ApiController::response(404, [], 'Không tìm thấy game');
        $row->update(['gia_tri' => $request->gia_tri]);
        return ApiController::response(200, [], 'Thành công');
    }

    public function saveSettings(Request $request)
    {
        $data = $request->except('_token');
        $arrays = [];
        foreach ($data as $key => $value) {
            $arrays[$key] = $value;
            Settings::where('name', $key)->update(['value' => $value]);

        }

        return redirect()->route('admin.settings');
    }

    public function postview()
    {
        return view('admin.auth.post');
    }

    public function createPost(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'price' => 'required',
            'danh_muc' => 'required|numeric',
            'thumbnail' => 'required|file|mimes:jpg,png,pdf|max:2048', // Adjust the allowed file types and size as needed
            'inside_content' => 'required',
            'vote' => 'required|numeric',
            'like' => 'required|numeric',
            'limit_vote' => 'required|numeric',
            'limit_like' => 'required|numeric',
            'vote_stars' => 'required|numeric',
        ]);

        $file = $request->file('thumbnail');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/posts/'), $fileName);
        $filePath = '/uploads/posts/' . $fileName;

        $post = new BaiViet();
        $post->price = ApiController::extractNumbersFromString($request->price);
        $post->post_id = ApiController::generate_random_md5();
        $post->title = $request->title;
        $post->small_title = '..';
        $post->danh_muc = $request->danh_muc;
        $post->thumbnail = $filePath;
        $post->content = $request->inside_content;
        $post->limit_vote = $request->limit_vote;
        $post->limit_like = $request->limit_like;
        $post->vote = $request->vote;
        $post->like = $request->like;
        $post->order = $request->vote_stars;
        $post->save();

        return ApiController::response(200, ['redirect_url' => route('admin.bai_viet')], 'Thêm bài viết thành công, ID: ' . $post->id);
    }

    public function usersView()
    {
        $users = User::paginate(10);
        return view('admin.auth.users.list', ['users' => $users]);
    }

    public function findUser($id)
    {
        $user = User::find($id)->first();
        return view('admin.auth.users.view', ['user' => $user]);
    }
}
