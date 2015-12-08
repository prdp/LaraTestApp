<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends CommonSeeder
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
            DB::table('users')->insert([
                'name' => str_random(10).$rand,
                'email' => str_random(10) . '@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(18),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
