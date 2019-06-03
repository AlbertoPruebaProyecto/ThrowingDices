<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationCharacterSpecialAptitude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters_special_aptitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id')->unsigned();
            $table->foreign('character_id')->references('id')->on('characters');
            $table->integer('special_aptitude_id')->unsigned();
            $table->foreign('special_aptitude_id')->references('id')->on('special_aptitudes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('characters_special_aptitudes');
    }
}
