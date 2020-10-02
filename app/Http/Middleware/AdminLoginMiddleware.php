<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    { 
        
        if(Auth::check())
        {
            return $next($request); 
        }
        else{
            return view('home');
        }
    }
}
