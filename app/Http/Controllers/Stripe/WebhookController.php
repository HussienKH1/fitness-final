<?php

namespace App\Http\Controllers;

use Stripe\Event;
use App\Models\User;
use Illuminate\Http\Request;

class StripeWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->all();


        $endpoint_secret = 'your_stripe_webhook_signing_secret';
        \Stripe\Webhook::constructEvent($payload, $request->header('Stripe-Signature'), $endpoint_secret);

      
        switch ($payload['type']) {
            case 'customer.subscription.updated':
                $subscription = $payload['data']['object'];
                $user = User::where('stripe_id', $subscription['customer'])->first();

                if ($user) {
         
                    $user->is_subscribed = $subscription['status'] === 'active';
                    $user->save();
                }
                break;
        }

        return response()->json(['status' => 'success']);
    }
}
