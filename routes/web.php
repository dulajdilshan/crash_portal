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


Route::get('/',function(){
    return view('auth.login');
});

Route::get('/g', function () {
    $dev = Developer::find(2);
    echo $dev->details->github_link;
});

Route::get('/crash',function(){

    return view('crash.crash',
        [
            'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'active'
        ]);
});

Route::get('/master',function(){
    return view('layouts/master');
});

Route::get('master',function(){
    return view('layouts/master');
});

//Crash Routes
Route::get('/crash/{id}','CrashController@viewCrash');


//Developers Routes
Route::get('/developer','DeveloperController@index');
Route::get('/developer/crashes','DeveloperController@viewCrashesBoard');
Route::get('/developer/myprofile','DeveloperController@viewMyprofile');
Route::get('/developer/dash','DeveloperController@viewDashboard');
Route::get('/developer/mycrashes','DeveloperController@viewMycrashes');

//Admin Routes
Route::get('/admin','AdminController@index');
Route::get('/admin/crashes','AdminController@viewCrashesBoard');
Route::get('/admin/myprofile','AdminController@viewMyprofile');
Route::get('/admin/dash','AdminController@viewDashboard');
Route::get('/admin/developers_manager','AdminController@viewDevelopersManager');
//Route::get('/developer/mycrashes','DeveloperController@viewMycrashes');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
