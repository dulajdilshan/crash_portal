<?php

namespace App\Http\Controllers;

use App\Crash_info;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Crash;
use App\Developer;
use App\Admin;
use App\Http\Controllers\DeveloperController;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
            return redirect('admin/dash');
    }

    //Open view crashes
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
        return view('admin.crashes',
            [
                'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ])->with('crashes',$all_crashes);
    }

    //Open Edit crashes
    public function editCrash($id)
    {
        $crash = Crash::find($id);
        return view('admin.edit_crash',[
            'scrashes'=>'active','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'deactive'
        ])->with('crash', $crash);
    }

    //open view/edit myprfile
    public function viewMyprofile()
    {
        $admin = Auth::user()->admin()->first();
        return view('admin.myprofile',
            [
                'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'active'
            ])->with('admin',$admin);
    }
    //Update inforation
    public function updateAdmin(Request $request)
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
            $admin = Admin::where('id',$request['admin_id'])->first();

            if ($admin==null){
                return redirect('admin/myprofile');
            }

            $admin['email'] = $request['email'];
            $admin['github_url'] = $request['github_url'];
            $admin['linkedin_url'] = $request['linkedin_url'];
            $admin['fb_url'] = $request['fb_url'];
            $admin->user['name'] = $request['name'];
            $admin->save();
            $admin->user->save();

        }catch (Exception $e){
            DB::rollback();
            return redirect('admin/myprofile/');
        }

        DB::commit();
        return redirect('admin/myprofile/');
    }

    //View Dashboard
    public function viewDashboard()
    {
        $notifications = Notification::where('all','=','1')->orderBy('created_at')->get();
        $crashes = Crash::all();
        $newcrash = DB::table('crashes')->latest()->get();
        $developers = Developer::all();
        return view('admin.dashboard',
            [
                'developers'=>$developers,'crashes' => $crashes,'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'active','smyprofile'=>'deactive'
            ])->with('newcrash',$newcrash)->with('notifications',$notifications);
    }

    //View developers Manager board
    public function viewDevelopersManager()
    {
        $developers = Developer::all();
        return view('admin.developers_manager',
            [
                'scrashes'=>'deactive','smycrashes'=>'active','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ])->with('developers',$developers);
    }

    //View Particular developer
    public function viewDeveloper($id)
    {

        $developer = Developer::find($id);

        if ($developer == null){
            return redirect('admin/developers_manager');
        }

        return view('admin.developer',
            [
                'scrashes'=>'deactive','smycrashes'=>'active','sdashboard'=>'deactive','smyprofile'=>'deactive'
            ])->with('developer',$developer);
    }

    //Edit and Update developer-profile
    public function updateDeveloperProfile(Request $request)
    {
        $id = $request['developer_id'];
        $request->validate([
            'email' => 'email',
            'name' => ['alpha','max:120'],
            'github_url' => 'url',
            'linkedin_url' => 'url',
            'fb_url' => 'url',
            'about' => 'max:255',
        ]);

        DB::beginTransaction();
        try{
            $developer = Developer::where('id',$request['developer_id'])->first();
            if ($developer==null){
                return redirect('admin/view-developer/'.$id);
            }

            $developer['email'] = $request['email'];
            $developer['name'] = $request['name'];
            $developer['github_url'] = $request['github_url'];
            $developer['linkedin_url'] = $request['linkedin_url'];
            $developer['fb_url'] = $request['fb_url'];
            $developer['about'] = $request['about'];
            $developer->save();

        }catch (Exception $e){
            DB::rollback();
            return redirect('admin/view-developer/'.$id);
        }

        DB::commit();

        return redirect('admin/view-developer/'.$id);
    }

    //delete Developer Profile
    public function deleteDeveloper(Request $request)
    {
        Developer::where('id',$request['developer_id'])->delete();
        return redirect('admin/developers_manager');
    }

    //View BLocked contents
    public function viewBlock()
    {
        return view ('admin_block');
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
                return redirect('/admin');
            }
            DB::commit();
        return redirect('/admin');
    }


    //Testing
    public function test()
    {
        $crashes = Crash::all();
//      $crashes = Crash::with('crash_info','developer')->get();
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
