<?php

namespace App\Http\Middleware;

use Closure,Auth;

class CheckLogin
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
        if(Auth::check()){
            return redirect()->back()->with('info','Bạn đã đăng nhập !');
        }
        return $next($request);
    }
}
