<?php
namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller {

  public function __construct() {
    $this->middleware(['auth', 'verified']);
  }

  public function index(){
    $plans = Plan::all();
    $users = User::all();
    return view('plan', compact('plans','users'));
  }
}



