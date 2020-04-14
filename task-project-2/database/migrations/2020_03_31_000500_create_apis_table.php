<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApisTable extends Migration
{
    //run php artisan migrate after table created

    public function up()
    {
        Schema::create('apis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('region');
            $table->string('phone_number');
            $table->string('country',2);
            #$table->string('bank');
            $table->string('bank_account_number');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('apis');
    }
}
