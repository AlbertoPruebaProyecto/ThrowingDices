<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('weight');
            $table->string('bonus_armor');
            $table->string('penality');
            $table->integer('range');
            $table->string('damage');
            $table->string('critical');
            $table->string('type');
            $table->string('desc');
            $table->integer('money_id')->unsigned();
            $table->foreign('money_id')->references('id')->on('money');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equipments');
    }
}
