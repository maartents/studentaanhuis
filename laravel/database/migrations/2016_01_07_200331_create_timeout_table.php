<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeout', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('reason');
            $table->date('date-start');
            $table->date('date-end');
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
        Schema::drop('timeout');
    }
}
