<?php

namespace App\Http\Controllers;

use App\Models\User;
use Stripe\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\ApiErrorException;
use Illuminate\Foundation\Auth\RegistersUsers;

class SignUpController extends Controller
{
    use RegistersUsers;
    
    public function store(Request $request)
    {

        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
            'terms_accepted' => ['required', 'accepted']
        ]);
        try{
        // Create a new user record
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Create a customer on Stripe
       
            $stripeCustomer = Customer::create([
                'email' => $user->email,
            ]);
            // Store the Stripe ID in the database
            $user->stripe_id = $stripeCustomer->id;
            $user->save();
        } catch (ApiErrorException $e) {
          
        }
        Auth::login($user);

        return redirect()->route('home');
    }
}

