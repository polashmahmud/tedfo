<?php

namespace App\Http\Middleware;

use Closure;

class CheckFoo
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
        if (! $request->session()->has('setfoo')) {
            return redirect('setfoo');
        }

        return $next($request);
    }
}
