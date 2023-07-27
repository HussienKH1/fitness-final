<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    
    protected $table = 'subscriptions';

    
     protected $fillable = [
            'user_id',
            'stripe_subscription_id',
            'status',
            'stripe_plan_id',
        ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
