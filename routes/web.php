<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::prefix(config('admin.prefix'))
->namespace(config('admin.namespace'))
->name(config('admin.name'))
->group(function(){

    Route::get('login',function(){
        return view('admin.login');
    })->name('login');
    Route::post('login','AdminController@login')->name('login');

    Route::middleware(config('admin.middleware'))->group(function(){
        Route::get('/',function(){
            return view('admin.layout');
        })->name('index');

        Route::any('logout',function(){
            Auth::logout();
            return redirect()->route(config('admin.name').'login')->with('info','Đăng xuất thành công !');
        })->name('logout');

        foreach(glob(base_path('routes/admin/*.php')) as $file){
            require_once $file;
        }
    });
});