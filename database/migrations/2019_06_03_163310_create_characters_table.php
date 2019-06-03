<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex');
            $table->string('age');
            $table->text('history');
            $table->integer('experience')->unsigned();
            $table->integer('strength');
            $table->integer('strength_temp');
            $table->integer('skill');
            $table->integer('skill_temp');
            $table->integer('constitution');
            $table->integer('constitution_temp');
            $table->integer('intelligence');
            $table->integer('intelligence_temp');
            $table->integer('wisdom');
            $table->integer('wisdom_temp');
            $table->integer('charisma');
            $table->integer('charisma_temp');
            $table->integer('hit_points_present');
            $table->integer('hit_points_total');
            $table->integer('initiative');
            $table->integer('armor_bonus');
            $table->integer('armor_touch');
            $table->integer('fortitude_base');
            $table->integer('fortitude_mod_var');
            $table->integer('fortitude_temp');
            $table->integer('reflex_base');
            $table->integer('reflex_mod_var');
            $table->integer('reflex_temp');
            $table->integer('will_base');
            $table->integer('will_mod_var');
            $table->integer('will_temp');
            $table->integer('bmc');
            $table->integer('dmc');
            $table->integer('level_id')->unsigned();
            $table->integer('class_id')->unsigned();
            $table->integer('race_id')->unsigned();
            $table->integer('money_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('party_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('race_id')->references('id')->on('races');
            $table->foreign('money_id')->references('id')->on('money');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('party_id')->references('id')->on('parties');
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
        Schema::drop('characters');
    }
}
