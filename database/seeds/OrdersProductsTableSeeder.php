<?php

use Illuminate\Database\Seeder;

class OrdersProductsTableSeeder extends CommonSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rand = $this->rand();
        for ($x = 0; $x < $rand; $x++) {
            DB::table('orders_products')->insert([
                'product_id' => rand(1,45),
                'order_id' => rand(1,45),
                'prices' => rand(001,9999),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
