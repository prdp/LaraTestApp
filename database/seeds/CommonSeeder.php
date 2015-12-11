<?php

use Illuminate\Database\Seeder;

class CommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function rand()
    {
        $rand = rand(0,30);
        return $rand;
    }
}
