<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnsubController extends Controller
{
    public function index(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }
    }


    public function store (Request $request){
        $user = $request->user();

        $user -> update([
            'active' => false,
        ]);


        return redirect()->route('home');
    }
}
