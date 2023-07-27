<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Other controller methods...

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('auth.login');
}

}