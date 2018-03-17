<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Developer;
use App\DevDetail;

Route::get('/',function(){
    return view('welcome');
});

Route::get('/g', function () {
    $dev = Developer::find(2);
    echo $dev->details->github_link;
});

Route::get('/dash',function(){
    return view('developer/home');
});

Route::get('/master',function(){
    return view('layouts/master');
});

Route::get('master',function(){
    return view('layouts/master');
});

Route::get('/developer/crashes',function(){
    $crashes = App\Crash::all();
    return view('developer/crashes',['crashes' => $crashes,'active'=>'crashes']);
});

Route::get('/crashes_',function(){
    $crashes = App\Crash::all();
    return view('developer/crashes_',['crashes' => $crashes]);
});


