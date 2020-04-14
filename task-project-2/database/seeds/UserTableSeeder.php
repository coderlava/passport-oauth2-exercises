<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run() {
    	User::truncate();

    	$faker = \Faker\Factory::create();

    	$password = Hash::make('toptal');

    	User::create([
    		'name' => 'Administrator',
    		'email' => 'admin@gmail.com',
    		'password' => $password;
    	]);

    	for($i=0; $i < 20; $i++) {
    		User::create([
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'password' => $password,
    		]);
    	}

    }
}
