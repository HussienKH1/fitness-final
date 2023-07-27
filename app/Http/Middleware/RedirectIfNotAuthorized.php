<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAuthorized
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('auth.register');
        }

        return $next($request);
    }
}

