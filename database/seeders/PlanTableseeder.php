<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'Basic Plan',
            'slug' => 'basic_plan',
            'stripe_name' => 'basic',
            'stripe_id' => 'price_1NWE8ECTmeKRLYVEphArYNai',
            'price' => 15,
            'abbreviation' => '/month'
        ]);
        Plan::create([
            'name' => 'Standard Plan',
            'slug' => 'standard_plan',
            'stripe_name' => 'standard',
            'stripe_id' => 'price_1NWE9OCTmeKRLYVEAMbcP8Wc',
            'price' => 25,
            'abbreviation' => '/month'
        ]);
        Plan::create([
            'name' => 'Premium Plan',
            'slug' => 'premium_plan',
            'stripe_name' => 'premium',
            'stripe_id' => 'price_1NWEAvCTmeKRLYVECCiqR85w',
            'price' => 45,
            'abbreviation' => '/month'
        ]);
    }
}
