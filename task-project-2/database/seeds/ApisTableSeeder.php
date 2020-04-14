<?php

use Illuminate\Database\Seeder;
use App\Api;

class ApisTableSeeder extends Seeder
{
    public function run() {

    Api::truncate();

    $faker = \Faker\Factory::create();

	//Lets create contents to our database

    for($i=0; $i < 100; $i++) {
    	Api::create([
    		'name' => $faker->name,
    		'region' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'country' => $faker->countryCode,
            #'bank' => $faker->region,
            'bank_account_number' => $faker->bankAccountNumber,
       	]);
       }
    }
}
