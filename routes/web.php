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

Route::get('/g', function () {
    return view('welcome');
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

Route::get('/crashes',function(){
    return view('developer/basic-table');
});


Route::get('/',function(){
    return view('developer/login');
});

