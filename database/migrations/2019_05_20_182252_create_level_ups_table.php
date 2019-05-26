<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_ups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level');
            $table->string('base_atack');
            $table->string('strenght');
            $table->string('reflection');
            $table->string('will');
            $table->string('special');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('level_ups');
    }
}
