<?php

namespace App\Http\Controllers;

use App\Crash;
use Illuminate\Http\Request;

class CrashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewCrash($id)
    {
        $crash = Crash::find($id);
        return view('crash.crash',[
            'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
        ])->with('crash', $crash);
    }
    public function test()
    {
        return "working test";
    }
}
