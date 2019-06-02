<?php

use Illuminate\Database\Seeder;

class ArmorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Armadura ligera
    	DB::table('equipments')->insert([
    		'name'			=>	'Acolchada',
    		'bonus_armor'	=>	'+1',
    		'penality'		=>	'0',
    		'weight'		=>	4.50,
    		'type'			=>	'armor;armor-light',
    		'money_id'  =>  DB::table('money')->where('gold', '5')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Cuero',
    		'bonus_armor'	=>	'+2',
    		'penality'		=>	'0',
    		'weight'		=>	6.80,
    		'type'			=>	'armor;armor-light',
    		'money_id'  =>  DB::table('money')->where('gold', '10')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Cuero tachonado',
    		'bonus_armor'	=>	'+3',
    		'penality'		=>	'-1',
    		'weight'		=>	9.00,
    		'type'			=>	'armor;armor-light',
    		'money_id'  =>  DB::table('money')->where('gold', '25')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Camisote de mallas',
    		'bonus_armor'	=>	'+4',
    		'penality'		=>	'-2',
    		'weight'		=>	11.00,
    		'type'			=>	'armor;armor-light',
    		'money_id'  =>  DB::table('money')->where('gold', '100')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);

    	//Armadura intermedia
    	DB::table('equipments')->insert([
    		'name'			=>	'De pieles',
    		'bonus_armor'	=>	'+4',
    		'penality'		=>	'-3',
    		'weight'		=>	11.00,
    		'type'			=>	'armor;armor-medium',
    		'money_id'  =>  DB::table('money')->where('gold', '15')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Cota de escamas',
    		'bonus_armor'	=>	'+5',
    		'penality'		=>	'-4',
    		'weight'		=>	13.6,
    		'type'			=>	'armor;armor-medium',
    		'money_id'  =>  DB::table('money')->where('gold', '50')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Cota de mallas',
    		'bonus_armor'	=>	'+6',
    		'penality'		=>	'-5',
    		'weight'		=>	18.00,
    		'type'			=>	'armor;armor-medium',
    		'money_id'  =>  DB::table('money')->where('gold', '150')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Coraza',
    		'bonus_armor'	=>	'+6',
    		'penality'		=>	'-4',
    		'weight'		=>	13.60,
    		'type'			=>	'armor;armor-medium',
    		'money_id'  =>  DB::table('money')->where('gold', '200')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);

    	//Armadura pesada
    	DB::table('equipments')->insert([
    		'name'			=>	'Laminada',
    		'bonus_armor'	=>	'+7',
    		'penality'		=>	'-7',
    		'weight'		=>	20.40,
    		'type'			=>	'armor;armor-heavy',
    		'money_id'  =>  DB::table('money')->where('gold', '200')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Cota de bandas',
    		'bonus_armor'	=>	'+7',
    		'penality'		=>	'-6',
    		'weight'		=>	15.90,
    		'type'			=>	'armor;armor-heavy',
    		'money_id'  =>  DB::table('money')->where('gold', '250')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Placas y mallas',
    		'bonus_armor'	=>	'+8',
    		'penality'		=>	'-7',
    		'weight'		=>	22.7,
    		'type'			=>	'armor;armor-heavy',
    		'money_id'  =>  DB::table('money')->where('gold', '600')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Completa',
    		'bonus_armor'	=>	'+9',
    		'penality'		=>	'-6',
    		'weight'		=>	22.7,
    		'type'			=>	'armor;armor-heavy',
    		'money_id'  =>  DB::table('money')->where('gold', '1500')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);

    	//Escudos
    	DB::table('equipments')->insert([
    		'name'			=>	'Rodela',
    		'bonus_armor'	=>	'+1',
    		'penality'		=>	'-1',
    		'weight'		=>	2.25,
    		'type'			=>	'armor;shield',
    		'money_id'  =>  DB::table('money')->where('gold', '5')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Escudo ligero de madera ',
    		'bonus_armor'	=>	'+1',
    		'penality'		=>	'-1',
    		'weight'		=>	2.3,
    		'type'			=>	'armor;shield',
    		'money_id'  =>  DB::table('money')->where('gold', '3')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Escudo ligero de acero',
    		'bonus_armor'	=>	'+1',
    		'penality'		=>	'-1',
    		'weight'		=>	2.7,
    		'type'			=>	'armor;shield',
    		'money_id'  =>  DB::table('money')->where('gold', '9')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Escudo pesado de madera',
    		'bonus_armor'	=>	'+2',
    		'penality'		=>	'-2',
    		'weight'		=>	4.5,
    		'type'			=>	'armor;shield',
    		'money_id'  =>  DB::table('money')->where('gold', '7')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Escudo pesado de acero',
    		'bonus_armor'	=>	'+2',
    		'penality'		=>	'-2',
    		'weight'		=>	6.8,
    		'type'			=>	'armor;shield',
    		'money_id'  =>  DB::table('money')->where('gold', '20')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'			=>	'Escudo pavés',
    		'bonus_armor'	=>	'+4',
    		'penality'		=>	'-10',
    		'weight'		=>	20.4,
    		'type'			=>	'armor;shield',
    		'money_id'  =>  DB::table('money')->where('gold', '30')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    }
}
