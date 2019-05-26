<?php

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('levels')->insert([
    		'num'		=>	1,
    		'exp_limit'	=>	0,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	2,
    		'exp_limit'	=>	2000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	3,
    		'exp_limit'	=>	5000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	4,
    		'exp_limit'	=>	9000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	5,
    		'exp_limit'	=>	15000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	6,
    		'exp_limit'	=>	23000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	7,
    		'exp_limit'	=>	35000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	8,
    		'exp_limit'	=>	51000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	9,
    		'exp_limit'	=>	75000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	10,
    		'exp_limit'	=>	105000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	11,
    		'exp_limit'	=>	155000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	12,
    		'exp_limit'	=>	220000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	13,
    		'exp_limit'	=>	315000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	14,
    		'exp_limit'	=>	445000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	15,
    		'exp_limit'	=>	635000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	16,
    		'exp_limit'	=>	890000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	17,
    		'exp_limit'	=>	1300000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	18,
    		'exp_limit'	=>	1800000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	19,
    		'exp_limit'	=>	2550000,
    	]);
    	DB::table('levels')->insert([
    		'num'		=>	20,
    		'exp_limit'	=>	3600000,
    	]);
    }
}
