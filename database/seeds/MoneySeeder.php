<?php

use Illuminate\Database\Seeder;

class MoneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('money')->insert([
    		'gold'		=>	'1',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'2',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'4',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'5',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'6',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'8',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'9',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'10',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'12',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'15',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'18',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'20',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'24',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'30',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'35',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'38',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'50',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'75',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    	DB::table('money')->insert([
    		'gold'		=>	'100',
    		'silver'	=>	'0',
    		'copper'	=>	'0'
    	]);
    }
}
