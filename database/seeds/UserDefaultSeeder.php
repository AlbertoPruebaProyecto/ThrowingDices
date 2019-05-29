<?php

use Illuminate\Database\Seeder;

class UserDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'name' 		=> 'asdf',
    		'email' 	=> 'asdf@asdf.com',
    		'password' 	=> bcrypt('asdf'),
    		'image' 	=> 'asdf.jpeg',
    		'is_admin' 	=> true
    	]);
    }
}
