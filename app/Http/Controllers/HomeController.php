<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $trainers = Trainer::all();
        $articles = Article::all();
        
        return view('home', compact('trainers','articles', 'users'));
    }
}
