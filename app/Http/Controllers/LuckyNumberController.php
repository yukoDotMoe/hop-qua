<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuckyNumberController extends Controller
{
    public function view()
    {
        return view('lucky');
    }
}
