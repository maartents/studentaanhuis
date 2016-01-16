<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('type');
            $table->string('phone');
            $table->string('mobile');
            $table->string('firstname');
            $table->string('insertion');
            $table->string('lastname');
            $table->string('street');
            $table->string('house_nr');
            $table->string('postalcode');
            $table->string('city');
            $table->tinyInteger('smsnotifications');
            $table->integer('maxappointments');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
