<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\ProductOrder;
use App\Models\SubscriptionOrder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        // 1. CRÉER un ProductOrder d'abord
        $productOrder = ProductOrder::create([
            'name' => 'Ordinateur Portable',
            'price' => 1200,
        ]);

        // 2. CRÉER un SubscriptionOrder d'abord
        $subscriptionOrder = SubscriptionOrder::create([
            'name' => 'Abonnement Netflix',
            'price' => 15,
        ]);

        // Order lié à un ProductOrder
        Order::create([
            'user_id'        => $user->id,
            'amount'         => $productOrder->price,
            'status'         => 'paid',
            'orderable_id'   => $productOrder->id,
            'orderable_type' => ProductOrder::class,
        ]);

        // Order lié à un SubscriptionOrder
        Order::create([
            'user_id'        => $user->id,
            'amount'         => $subscriptionOrder->price,
            'status'         => 'paid',
            'orderable_id'   => $subscriptionOrder->id,
            'orderable_type' => SubscriptionOrder::class,
        ]);
    }
}
