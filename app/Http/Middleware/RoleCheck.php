<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$guard=null)
    {
        if(Session::has('userType'))
        {
           if(session('userType') == $guard)
           return $next($request);
        }

        return redirect()->route('home');
    }
}
