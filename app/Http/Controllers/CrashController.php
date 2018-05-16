<?php

namespace App\Http\Controllers;

use App\Crash;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function updateCrash(Request $request)
    {
        $id = $request['crash_id'];

        $request->validate([
            'category' => 'max:100',
            'report_details' => 'max:255',
            'progress' => ['numeric','regex:/^(?:100|\d{1,2})(?:\.\d{1,2})?$/'],
            'development_status' => 'max:255'
        ]);

        DB::beginTransaction();
        try{
            $crash = Crash::where('id',$request['crash_id'])->first();
            if ($crash==null){
                return redirect('admin/crash/'.$id);
            }

            $crash->crash_info['category'] = $request['category'];
            $crash->crash_info['crash_details'] = $request['report_details'];
            $crash->crash_info->save();

            if ($request['progress']==100){
                $solved = 1;
            }else{
                $solved = 0;
            }
            $crash['solved'] = $solved;
            $crash['progress'] = $request['progress'];
            $crash['development_status'] = $request['development_status'];
            $crash->save();

        }catch (Exception $e){
            DB::rollback();
            return redirect('admin/crash/'.$id);
        }

        DB::commit();

        return redirect('admin/crash/'.$id);

//        For testing
//        return $crash->crash_info['category'].$crash['id'];
    }

    public function deleteCrash(Request $request)
    {
        
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
