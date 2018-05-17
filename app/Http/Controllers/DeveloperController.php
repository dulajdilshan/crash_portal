<?php

namespace App\Http\Controllers;
use App\Developer;
use App\Solved_crash;
use Illuminate\Http\Request;
use App\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Crash;
use App\Admin;

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

    public function viewMyprofile()
    {
        $developer = Auth::user()->developer()->first();
        return view('developer.myprofile',
            [
                'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'active'
            ])->with('developer',$developer);
    }

    public function viewDashboard()
    {
        $notifications = Notification::where('all','=','1')->orderBy('created_at')->get();
        $crashes = Crash::all();
        $newcrash = DB::table('crashes')->latest()->get();
        $developers = Developer::all()->count();
        return view('developer.dashboard',
            [
                'developers'=>$developers,'crashes' => $crashes,'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'active','smyprofile'=>'deactive'
            ])->with('newcrash',$newcrash)->with('notifications',$notifications);
    }

    public function viewCrashesBoard()
    {
        $all_crashes = DB::table('crashes')
            ->join('crash_infos','crash_infos.id','=','crashes.id')
            ->join('developers','crashes.developer_id','=','developers.id')
            ->select(
                'crashes.id','crash_title','progress',
                'reporter_id','development_status','developer_id',
                'report_created_at','name','category','crash_details'
            )->get();
        return view('developer.crashes',
            [
                'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ])->with('crashes',$all_crashes);
    }

    public function viewBlock()
    {
        return view('developer_block');
    }

    public function send(Request $request)
    {
        DB::beginTransaction();

        try {
            $not = new Notification;
            $not['all'] = $request['all'];
            $not['admin_only'] = $request['admin_only'];
            $not['developer_id'] = $request['developer_id'];
            $not['title'] = $request['title'];
            $not['description'] = $request['description'];
            $not->save();
        }
        catch (Exception $e){
            DB::rollback();
            return redirect('/developer');
        }
        DB::commit();
        return redirect('/developer');
    }

    //Update inforation
    public function updateDeveloper(Request $request)
    {

        $request->validate([
            'name' => 'max:150',
            'email' => 'email',
            'github_url' => 'url',
            'linkedin_url' => 'url',
            'fb_url' => 'url',
        ]);

        DB::beginTransaction();
        try{
            $developer = Developer::where('id',$request['developer_id'])->first();

            if ($developer==null){
                return redirect('developer/myprofile');
            }

            $developer['email'] = $request['email'];
            $developer['github_url'] = $request['github_url'];
            $developer['linkedin_url'] = $request['linkedin_url'];
            $developer['fb_url'] = $request['fb_url'];
            $developer->user['name'] = $request['name'];
            $developer->save();
            $developer->user->save();

        }catch (Exception $e){
            DB::rollback();
            return redirect('developer/myprofile/');
        }

        DB::commit();
        return redirect('developer/myprofile/');
    }
    public function test(){
        return "working";
    }
}
