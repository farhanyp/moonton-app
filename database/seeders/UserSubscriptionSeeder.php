<?php

namespace Database\Seeders;

use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        UserSubscription::create([
            'user_id' => 2,
            'subscription_plan_id' => 2,
            'price' => 800000,
            'expired_date' => Carbon::now(),
            'payment_status' => 'paid',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
