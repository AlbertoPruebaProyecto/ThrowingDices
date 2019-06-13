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
    		'name' 		=> 'admin',
    		'email' 	=> 'admin@admin.com',
    		'password' 	=> bcrypt('admin'),
    		'image' 	=> 'admin.jpeg',
    		'is_admin' 	=> true
    	]);
    }
}
