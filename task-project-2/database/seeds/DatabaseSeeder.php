<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	$this->call(ApisTableSeeder::class);
    	$this->call(UsersTableSeeder::class);
    }
}
