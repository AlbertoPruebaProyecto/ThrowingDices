<?php

use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//SIN ARMA
    	DB::table('equipments')->insert([
    		'name'		=>	'Guantelete',
    		'damage'	=>	'1d3',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	0.45,
    		'type'		=>	'weapon;Ataques_sin_armas',
    		'money_id'  =>  DB::table('money')->where('gold', '2')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);

    	//ARMAS CUERPO A CUERPO LIGERAS
    	DB::table('equipments')->insert([
    		'name'		=>	'Daga',
    		'damage'	=>	'1d4',
    		'critical'	=>	'19–20/×2',
    		'range'		=>	3,
    		'weight'	=>	0.45,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '2')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Guantelete armado',
    		'damage'	=>	'1d4',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	0.45,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '5')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Hoz',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '6')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Maza ligera',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	1.80,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '5')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Armadura con púas',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '50')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Cachiporra',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '1')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Cuchillo de estrella',
    		'damage'	=>	'1d4',
    		'critical'	=>	'×3',
    		'range'		=>	6,
    		'weight'	=>	1.35,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '24')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Escudo ligero',
    		'damage'	=>	'1d3',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	2.35,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '35')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Escudo ligero armado',
    		'damage'	=>	'1d4',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	3.35,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '50')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Espada corta',
    		'damage'	=>	'1d6',
    		'critical'	=>	'19–20/×2',
    		'range'		=>	0,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '10')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Hacha arrojadiza',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×2',
    		'range'		=>	3,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '8')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Hacha de mano',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×3',
    		'range'		=>	0,
    		'weight'	=>	1.35,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '6')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Martillo ligero',
    		'damage'	=>	'1d4',
    		'critical'	=>	'×2',
    		'range'		=>	6,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '1')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Pico ligero',
    		'damage'	=>	'1d4',
    		'critical'	=>	'×4',
    		'range'		=>	0,
    		'weight'	=>	1.35,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_ligeras',
    		'money_id'  =>  DB::table('money')->where('gold', '4')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);

    	//ARMAS CUERPO A CUERPO A UNA MANO
    	DB::table('equipments')->insert([
    		'name'		=>	'Lanza corta',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×2',
    		'range'		=>	6,
    		'weight'	=>	1.35,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '1')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Maza pesada',
    		'damage'	=>	'1d8',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	3.60,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '12')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Maza de armas',
    		'damage'	=>	'1d8',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	2.70,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '8')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Cimitarra',
    		'damage'	=>	'1d6',
    		'critical'	=>	'18–20/×2',
    		'range'		=>	0,
    		'weight'	=>	1.80,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '15')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Escudo pesado',
    		'damage'	=>	'1d4',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	2.80,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '38')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Escudo pes. armado',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	3.80,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '50')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Espada larga',
    		'damage'	=>	'1d8',
    		'critical'	=>	'19–20/×2',
    		'range'		=>	0,
    		'weight'	=>	1.80,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '15')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Espada ropera',
    		'damage'	=>	'1d6',
    		'critical'	=>	'18–20/×2',
    		'range'		=>	0,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '20')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Hacha de batalla',
    		'damage'	=>	'1d8',
    		'critical'	=>	'x3',
    		'range'		=>	0,
    		'weight'	=>	2.70,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '10')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Mangual',
    		'damage'	=>	'1d8',
    		'critical'	=>	'x2',
    		'range'		=>	0,
    		'weight'	=>	2.25,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '8')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Martillo de guerra',
    		'damage'	=>	'1d8',
    		'critical'	=>	'x3',
    		'range'		=>	0,
    		'weight'	=>	2.24,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '12')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Pico pesado',
    		'damage'	=>	'1d6',
    		'critical'	=>	'x4',
    		'range'		=>	0,
    		'weight'	=>	2.70,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '8')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Tridente',
    		'damage'	=>	'1d8',
    		'critical'	=>	'x2',
    		'range'		=>	3,
    		'weight'	=>	1.80,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_una_mano',
    		'money_id'  =>  DB::table('money')->where('gold', '15')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);

    	//ARMAS CUERPO A CUERPO A DOS MANOS
    	DB::table('equipments')->insert([
    		'name'		=>	'Lanza',
    		'damage'	=>	'1d8',
    		'critical'	=>	'×3',
    		'range'		=>	6,
    		'weight'	=>	2.70,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '2')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Lanza larga',
    		'damage'	=>	'1d8',
    		'critical'	=>	'×3',
    		'range'		=>	0,
    		'weight'	=>	4.05,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '5')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Bastón',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	1.80,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '2')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Alabarda',
    		'damage'	=>	'1d10',
    		'critical'	=>	'×3',
    		'range'		=>	0,
    		'weight'	=>	5.40,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '10')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Alfanje',
    		'damage'	=>	'2d4',
    		'critical'	=>	'18–20/×2',
    		'range'		=>	0,
    		'weight'	=>	3.60,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '75')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Bisarma',
    		'damage'	=>	'2d4',
    		'critical'	=>	'×3',
    		'range'		=>	0,
    		'weight'	=>	5.40,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '9')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Gran clava',
    		'damage'	=>	'1d10',
    		'critical'	=>	'×2',
    		'range'		=>	0,
    		'weight'	=>	3.60,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '5')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Gran hacha',
    		'damage'	=>	'1d12',
    		'critical'	=>	'×3',
    		'range'		=>	0,
    		'weight'	=>	5.40,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '20')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Guadaña',
    		'damage'	=>	'2d4',
    		'critical'	=>	'×4',
    		'range'		=>	0,
    		'weight'	=>	4.50,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '18')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Guja',
    		'damage'	=>	'1d10',
    		'critical'	=>	'×3',
    		'range'		=>	0,
    		'weight'	=>	4.50,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '8')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Lanza de caballería',
    		'damage'	=>	'1d8',
    		'critical'	=>	'×3',
    		'range'		=>	0,
    		'weight'	=>	4.50,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '8')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Mandoble',
    		'damage'	=>	'2d6',
    		'critical'	=>	'19–20/×2',
    		'range'		=>	0,
    		'weight'	=>	3.60,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '50')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Mangual pesado',
    		'damage'	=>	'1d10',
    		'critical'	=>	'19–20/×2',
    		'range'		=>	0,
    		'weight'	=>	4.50,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '15')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Ronca',
    		'damage'	=>	'2d4',
    		'critical'	=>	'×3',
    		'range'		=>	0,
    		'weight'	=>	5.40,
    		'type'		=>	'weapon;Armas_cuerpo_a_cuerpo_a_dos_manos',
    		'money_id'  =>  DB::table('money')->where('gold', '10')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);

    	//ARMAS A DISTANCIA
    	DB::table('equipments')->insert([
    		'name'		=>	'Ballesta pesada',
    		'damage'	=>	'1d10',
    		'critical'	=>	'19–20/×2',
    		'range'		=>	36,
    		'weight'	=>	3.60,
    		'type'		=>	'weapon;Armas_a_distancia',
    		'money_id'  =>  DB::table('money')->where('gold', '50')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Ballesta ligera',
    		'damage'	=>	'1d8',
    		'critical'	=>	'19–20/×2',
    		'range'		=>	24,
    		'weight'	=>	1.80,
    		'type'		=>	'weapon;Armas_a_distancia',
    		'money_id'  =>  DB::table('money')->where('gold', '35')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Cerbatana',
    		'damage'	=>	'1d2',
    		'critical'	=>	'×2',
    		'range'		=>	6,
    		'weight'	=>	0.45,
    		'type'		=>	'weapon;Armas_a_distancia',
    		'money_id'  =>  DB::table('money')->where('gold', '2')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Arco corto',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×3',
    		'range'		=>	18,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_a_distancia',
    		'money_id'  =>  DB::table('money')->where('gold', '30')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Arco corto compuesto',
    		'damage'	=>	'1d6',
    		'critical'	=>	'×3',
    		'range'		=>	21,
    		'weight'	=>	0.90,
    		'type'		=>	'weapon;Armas_a_distancia',
    		'money_id'  =>  DB::table('money')->where('gold', '75')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Arco largo',
    		'damage'	=>	'1d8',
    		'critical'	=>	'×3',
    		'range'		=>	30,
    		'weight'	=>	1.35,
    		'type'		=>	'weapon;Armas_a_distancia',
    		'money_id'  =>  DB::table('money')->where('gold', '75')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    	DB::table('equipments')->insert([
    		'name'		=>	'Arco largo compuesto',
    		'damage'	=>	'1d8',
    		'critical'	=>	'×3',
    		'range'		=>	33,
    		'weight'	=>	1.35,
    		'type'		=>	'weapon;Armas_a_distancia',
    		'money_id'  =>  DB::table('money')->where('gold', '100')->where('silver', '0')->where('copper', '0')->value('id'),
    	]);
    }
}
