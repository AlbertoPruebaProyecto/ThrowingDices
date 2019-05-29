<?php

use Illuminate\Database\Seeder;

class PaladinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CLASS
    	DB::table('classes')->insert([
    		'name'          =>  'paladin',
    		'class_skills'  =>  '',
    		'hit_dice'      =>  'd12',
    	]);
    }
}
