<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkereasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workareas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('street');
            $table->string('house_nr');
            $table->string('postalcode');
            $table->integer('radius');
            $table->string('not1');
            $table->string('not2');
            $table->string('not3');
            $table->string('not4');
            $table->string('not5');
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
        Schema::drop('workareas');
    }
}
