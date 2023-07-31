<?php

namespace App\Http\Controllers;

use App\Models\LuckyNumber;
use App\Models\Settings;
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
            // Authentication successful
            return redirect()->route('admin.dashboard');
        } else {
            // Authentication failed
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
        $list = LuckyNumber::paginate(20);
        return view('admin.auth.lucky_game', ['data' => $list]);
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
}
