<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plan;

class SubscriptionController extends Controller {

  public function __construct() {
    $this->middleware(['auth', 'verified']);
  }

  public function index(){
    $plans = Plan::all();

    return view('plan', compact('plans'));
  }
}



