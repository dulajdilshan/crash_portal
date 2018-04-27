<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Crash;
use App\Developer;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
            return redirect('admin/dash');
    }

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
        $developers = Developer::all();
        return view('admin.developers_manager',
            [
                'scrashes'=>'deactive','smycrashes'=>'active','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ])->with('developers',$developers);
    }
    public function viewBlock()
    {
        return view ('admin_block');
    }
}
