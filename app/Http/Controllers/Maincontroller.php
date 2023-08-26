<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Trainer;
use Illuminate\Http\Request;
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

    function article($id){
        $articles = Article::find($id);
        $users = User::all();
        return view('article', compact('articles','users'));
    }

    function index(){
        $trainers = Trainer::all();
        $articles = Article::all();
        return view('index', compact('trainers', 'articles'));
    }

    function unsub(){
        $users = User::all();
        return view ('unsubscribe', compact('users'));
    }
}

