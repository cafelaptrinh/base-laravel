<?php

namespace App\Http\Middleware;

use Closure,Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guest()){
            return redirect()->route(config('admin.name').'login')->with('info','Hãy đăng nhập trước đã !');
        }
        if(auth()->user()->hasPermission('dashboard')){
            return $next($request);
        }
        Auth::logout();
        return abort(403);
    }
}
