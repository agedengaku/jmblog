<?php

namespace App\Http\Middleware;

use Closure;

class CustomAuth
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
        if (auth()->user() === null) {
            return redirect('/login');
        }
        if (auth()->user()->role_id === 3) {
            return redirect('/');
        }
        return $next($request);
    }
}
