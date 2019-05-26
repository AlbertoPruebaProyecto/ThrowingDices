<?php

use Illuminate\Database\Seeder;

class LevelUpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* BARBARIAN */
    	DB::table('level_ups')->insert([
    		'level'			=>  '1º',
    		'base_atack'    =>  '+1',
    		'strenght'      =>  '+2',
    		'reflection'    =>  '+0',
    		'will'   		=>  '+0',
    		'special'       =>  'Movimiento rápido, furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '2º',
    		'base_atack'    =>  '+2',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+0',
    		'will'   		=>  '+0',
    		'special'       =>  'Poder de furia, esquiva asombrosa',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '3º',
    		'base_atack'    =>  '+3',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+1',
    		'special'       =>  'Sentido de las trampas +1',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '4º',
    		'base_atack'    =>  '+4',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+1',
    		'special'       =>  'Poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '5º',
    		'base_atack'    =>  '+5',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+1',
    		'special'       =>  'Esquiva asombrosa mejorada',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '6º',
    		'base_atack'    =>  '+6/+1',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+2',
    		'special'       =>  'Poder de furia, sentido de las trampas +2',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '7º',
    		'base_atack'    =>  '+7/+2',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+2',
    		'special'       =>  'Reducción del daño 1/—',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '8º',
    		'base_atack'    =>  '+8/+3',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+2',
    		'special'       =>  'Poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '9º',
    		'base_atack'    =>  '+9/+4',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+3',
    		'special'       =>  'Sentido de las trampas +3',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '10º',
    		'base_atack'    =>  '+10/+5',
    		'strenght'      =>  '+7',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+3',
    		'special'       =>  'Reducción del daño 2/—, poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '11º',
    		'base_atack'    =>  '+11/+6/+1',
    		'strenght'      =>  '+7',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+3',
    		'special'       =>  'Furia mayor',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '12º',
    		'base_atack'    =>  '+12/+7/+2',
    		'strenght'      =>  '+8',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+4',
    		'special'       =>  'Poder de furia, sentido de las trampas +4',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '13º',
    		'base_atack'    =>  '+13/+8/+3',
    		'strenght'      =>  '+8',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+4',
    		'special'       =>  'Reducción del daño 3/—',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '14º',
    		'base_atack'    =>  '+14/+9/+4',
    		'strenght'      =>  '+9',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+4',
    		'special'       =>  'Voluntad indomable, poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '15º',
    		'base_atack'    =>  '+15/+10/+5',
    		'strenght'      =>  '+9',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+5',
    		'special'       =>  'Sentido de las trampas +5',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '16º',
    		'base_atack'    =>  '+16/+11/+6/+1',
    		'strenght'      =>  '+10',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+5',
    		'special'       =>  'Reducción del daño 4/—, poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '17º',
    		'base_atack'    =>  '+17/+12/+7/+2',
    		'strenght'      =>  '+10',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+5',
    		'special'       =>  'Furia incansable',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '18º',
    		'base_atack'    =>  '+18/+13/+8/+3',
    		'strenght'      =>  '+11',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+6',
    		'special'       =>  'Poder de furia, sentido de las trampas +6',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '19º',
    		'base_atack'    =>  '+19/+14/+9/+4',
    		'strenght'      =>  '+11',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+6',
    		'special'       =>  'Reducción del daño 5/—',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '20º',
    		'base_atack'    =>  '+20/+15/+10/+5',
    		'strenght'      =>  '+12',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+6',
    		'special'       =>  'Furia poderosa, poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    }
}
