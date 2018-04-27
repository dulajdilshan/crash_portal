<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');

    }
    public function viewUserHome()
    {
        if(Auth::user()->admin()->exists())
        {
            return redirect('/admin/dash');
        }elseif (Auth::user()->developer()->exists())
        {
            return redirect('/developer/dash');
        }
        return redirect('/index');
    }

}
