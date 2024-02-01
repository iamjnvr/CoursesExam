<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsInstructor
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'instructor') {
            return $next($request);
        }

        return redirect('/home'); 
    }
}
