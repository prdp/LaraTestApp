<?php

//namespace app\database\seed;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends CommonSeeder
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

              DB::table('products')->insert([
              'name' => str_random(8).$rand,
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s"),
              ]);

        }
    }
}
