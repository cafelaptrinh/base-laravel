<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestLogin;
use Auth;

class AdminController extends Controller
{
    function login(RequestLogin $r){
        if(Auth::attempt(['username'=>$r->username,'password'=>$r->password],$r->filled('remember'))||
        Auth::attempt(['email'=>$r->username,'password'=>$r->password],$r->filled('remember'))){
            return redirect()->route(config('admin.name').'index')->with('success','Xin Chào '.Auth::user()->name.' !');
        }
        return redirect()->back()->with('error','Tài khoản hoặc mật khẩu không đúng !');
    }

    function index(){
        return view('admin.index');
    }
}
