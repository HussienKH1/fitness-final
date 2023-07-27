<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserRegistration
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user is registered
            $user = Auth::user();
            if ($user->is_registered) { // Replace 'is_registered' with your actual column name indicating user registration status
                return $next($request);
            } else {
                // User is not registered, handle the error (e.g., redirect to registration page)
                return redirect()->route('auth.register')->with('error', 'Please complete your registration first.');
            }
        }

        // User is not authenticated, proceed with login
        return $next($request);
    }
}
