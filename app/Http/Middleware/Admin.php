<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::check() &&  Auth::user()->admin==1){
            //isAdmin function is at user Model

        return $next($request);
    }
//        return redirect('home');
        return redirect()->route('login');

    }
}
