<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->enum('category', ['FREE','REGISTERED']);
            $table->enum('vehicle', ['MOTORCYCLE', 'AUTOMOBILE']);
            $table->string('license_plate', 10);
            $table->boolean('status');
            $table->string('phone');
            $table->string('cel_phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
