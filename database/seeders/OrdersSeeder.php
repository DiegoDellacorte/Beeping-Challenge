<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrdersLine;
use App\Models\Product;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        for ($i = 0; $i < 20; $i++) {
            $order = Order::create([
                'order_ref' => 'Order Ref ' . ($i + 1),
                'customer_name' => 'Customer ' . ($i + 1),
            ]);
            
            for ($j = 0; $j < 2; $j++) {
                $order->lines()->create([
                    'qty' => rand(1, 10),
                    'product_id' => rand(1, 10),
                ]);
            }
        }
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => 'Product ' . ($i + 1),
                'cost' => rand(10, 100),
            ]);
        }
    }
}
