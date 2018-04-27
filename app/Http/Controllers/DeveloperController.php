<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Crash;
use Illuminate\Support\Facades\Auth;

class DeveloperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth_developer');
    }

    //view
    public function index()
    {
        return redirect('developer/dash');
    }
    public function viewCrashesBoard()
    {
        $crashes = Crash::all();
        return view('developer.crashes',
            [
                'crashes' => $crashes,'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ]);
    }

    public function viewMyprofile()
    {
        $crashes = Crash::all();
        return view('developer.myprofile',
            [
                'crashes' => $crashes,'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'active'
            ]);
    }

    public function viewDashboard()
    {
        $crashes = Crash::all();
        return view('developer.dash',
            [
                'crashes' => $crashes,'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'active','smyprofile'=>'deactive'
            ]);
    }

    public function viewMycrashes()
    {
        $crashes = Crash::all();
        return view('developer.mycrashes',
            [
                'crashes' => $crashes,'scrashes'=>'deactive','smycrashes'=>'active','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ]);
    }
    public function viewBlock()
    {
        return view('developer_block');
    }
}
