<?php

namespace App\Http\Controllers\Stripe;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plan;


class PaymentController extends Controller
{

    public function index(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('checkout', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function store (Request $request){
        $user = $request->user();

        $paymentMethod= $request -> input('payment-method');

        $user -> update([
            'line1' => $request->line1,
            'line2' => $request->line2,
            'city' => $request->city,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
        ]);

        $plan = Plan::where('stripe_name', $request->plan) -> first();

        $user -> newSubsicription($plan -> stripe_name, $plan->stripe_id)->create($paymentMethod);

        return view('home');
    }
}

