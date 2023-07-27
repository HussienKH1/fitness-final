<?php

namespace App\Http\Middleware;

use Closure;
use Stripe\Stripe;
use Stripe\Customer;

class CheckSubscriptionMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            if (!$user->stripe_id) {
                return redirect()->route('plan');
            }

            $customer = Customer::retrieve($user->stripe_id);
            
            if (!$customer || !$customer->subscriptions || count($customer->subscriptions->data) === 0) {
                return redirect()->route('plan');
            }

            $activeSubscription = false;
            foreach ($customer->subscriptions->data as $subscription) {
                if ($subscription->status === 'active') {
                    $activeSubscription = true;
                    break;
                }
            }

            if (!$activeSubscription) {
                return redirect()->route('plan');
            }

        } catch (\Stripe\Exception\ApiErrorException $e) {
            return response()->json(['error' => 'Subscription information not available'], 500);
        }

        return $next($request);
    }
}