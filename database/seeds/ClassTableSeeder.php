<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('classes')->insert([
    		'name'          =>  'barbarian',
    		'class_skills'  =>  'acrobatics;craftwork;intimidate;ride;swim;perception;swisdom_nature;survival;animal_contact;climb',
    		'hit_dice'      =>  'd12',
    	]);
    }
}
