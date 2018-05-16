<?php

namespace App\Http\Controllers;

use App\Crash_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $all_crashes = DB::table('crashes')
            ->join('crash_infos','crash_infos.id','=','crashes.id')
            ->join('developers','crashes.developer_id','=','developers.id')
            ->select(
                'crashes.id','crash_title','progress',
                'reporter_id','development_status',
                'report_created_at','name','category','crash_details'
            )->get();
        return view('admin.crashes',
            [
                'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ])->with('crashes',$all_crashes);
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

    public function editCrash($id)
    {
        $crash = Crash::find($id);
        return view('admin.edit_crash',[
            'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
        ])->with('crash', $crash);
    }

    public function test(){
        $crashes = Crash::all();
//        $crashes = Crash::with('crash_info','developer')->get();
        $crashes_all = DB::table('crashes')
            ->join('crash_infos','crash_infos.id','=','crashes.id')
            ->select('*')
            ->get();
        return view('admin.test',
            [
                'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ])->with('crashes',$crashes);
    }
}
