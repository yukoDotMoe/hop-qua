<?php

namespace App\Http\Controllers;

use App\Models\LuckyNumber;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public static function response($code, $data, $msg = null)
    {
        if ($code <= 200)
        {
            return response()->json([
                'success' => true,
                'code' => $code,
                'message' => $msg,
                'data' => $data
            ]);
        }else{
            return response()->json([
                'success' => false,
                'code' => $code,
                'message' => $msg,
                'data' => $data
            ]);
        }
    }

    public static function currentUsers($real = false)
    {
        return ($real) ? User::all()->count() : ceil(User::all()->count() * 69 * 3.14);
    }

    public static function getSetting($name)
    {
        return Settings::where('name', $name)->first()->value;
    }

    public static function gameIdToId(string $gameid)
    {
        return LuckyNumber::where('game_id', $gameid)->first()->id ?? 0;
    }
}
