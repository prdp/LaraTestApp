<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends CommonSeeder
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

            DB::table('tasks')->insert([
                'title' => str_random(8).$rand,
                'description' => str_random(8).$rand,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);

        }
    }
}
