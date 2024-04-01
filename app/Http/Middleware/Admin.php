<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Contracts\Support\Responsable)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Support\Responsable
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->utype != 'ADM') {
            session()->flush();
            return redirect('login'); 
        }

        return $next($request);
    }
}
