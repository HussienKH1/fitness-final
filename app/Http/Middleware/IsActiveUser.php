<?php

namespace App\Http\Middleware;

use Closure;

class IsActiveUser
{
    public function handle($request, Closure $next)
    {
        if (auth()->user() && auth()->user()->active) {
            return $next($request);
        }

        return redirect()->route('plan');
    }
}
