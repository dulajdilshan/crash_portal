<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crash;
class AdminController extends Controller
{

    //View
    public function viewCrashesBoard(){
        $crashes = Crash::all();
        return view('admin.crashes',
            [
                'crashes' => $crashes,'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ]);
    }
    public function viewMyprofile(){
        $crashes = Crash::all();
        return view('admin.myprofile',
            [
                'crashes' => $crashes,'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'active'
            ]);
    }
    public function viewDashboard(){
        $crashes = Crash::all();
        return view('admin.dash',
            [
                'crashes' => $crashes,'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'active','smyprofile'=>'deactive'
            ]);
    }
    public function viewDevelopersManager(){
        $crashes = Crash::all();
        return view('admin.developers_manager',
            [
                'crashes' => $crashes,'scrashes'=>'deactive','smycrashes'=>'active','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ]);
    }
}
