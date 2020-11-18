<?php

namespace App\Http\Middleware;

use Closure;

class TutorCMiddleware
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
        if ((auth()->check() && auth()->user()->type === 'tc')||
            (auth()->check() && auth()->user()->type === 'ad')){
            return $next($request);
        }
        return redirect('/');
    }
}