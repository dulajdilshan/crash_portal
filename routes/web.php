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

use App\Http\Middleware\AuthAdmin;


/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
*/

Route::get('/index','HomeController@index');
Route::get('/', 'HomeController@viewUserHome');
Route::get('/home','HomeController@viewUserHome');

Route::get('/crash',function(){

    return view('crash.crash',
        [
            'scrashes'=>'deactive','smycrashes'=>'deactive','sdashboard'=>'deactive','smyprofile'=>'active'
        ]);
});

Route::get('/master',function(){
    return view('layouts/master');
});


//Crash Routes
Route::get('admin/crash/{id}','AdminController@viewCrash');
Route::get('/crash/{id}','CrashController@viewCrash');

/*
|--------------------------------------------------------------------------
| Developers Routes
|--------------------------------------------------------------------------
*/

Route::get('/developer','DeveloperController@index');
Route::get('/developer/crashes','DeveloperController@viewCrashesBoard');
Route::get('/developer/myprofile','DeveloperController@viewMyprofile');
Route::get('/developer/dash','DeveloperController@viewDashboard');
Route::get('/developer/mycrashes','DeveloperController@viewMycrashes');
Route::get('/developer_block',function (){
    return view('developer_block');
});
//Route::get('developer_block','DeveloperController@viewBlock');

/*
|--------------------------------------------------------------------------
| Admins Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin','AdminController@index')->middleware(AuthAdmin::class);
Route::get('/admin/crashes','AdminController@viewCrashesBoard')->middleware(AuthAdmin::class);
Route::get('/admin/myprofile','AdminController@viewMyprofile')->middleware(AuthAdmin::class);
Route::get('/admin/dash','AdminController@viewDashboard')->middleware(AuthAdmin::class);
Route::get('/admin/developers_manager','AdminController@viewDevelopersManager')->middleware(AuthAdmin::class);
Route::get('/admin_block','AdminController@viewBlock');



Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','LoginController@logout');


//Testing proposes
Route::get('test',function (){
    $crash = \App\Crash::find(3);
    $dev = \App\Developer::find(22);
    return view('test',
        [
            'dev'=>$dev,
        ]
        )->with('crash',$crash);
});