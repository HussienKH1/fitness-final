<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class Maincontroller extends Controller
{
    function login(){
        return view ('auth.login');
    }

    function register(){
        return view('auth.register');
    }
    

    function checkout(){
        return view('checkout');
    }

    function article(){
        return view('article');
    }
}

