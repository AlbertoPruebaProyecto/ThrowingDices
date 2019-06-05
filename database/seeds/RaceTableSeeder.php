<?php

use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('races')->insert([
            'name'          =>  'elf',
            'update_skills' =>  'skill+2;intelligence+2;constitution-2'
        ]);
        DB::table('races')->insert([
            'name'          =>  'dwaf',
            'update_skills' =>  'constitution+2;wisdom+2;charisma-2'
        ]);
        DB::table('races')->insert([
            'name'          =>  'gnome',
            'update_skills' =>  'constitution+2;charisma+2;strength-2'
        ]);
        DB::table('races')->insert([
            'name'          =>  'human',
            'update_skills' =>  'skill+2;strength+2'
        ]);
        DB::table('races')->insert([
            'name'          =>  'medium',
            'update_skills' =>  'skill+2;intelligence+2;constitution-2'
        ]);
        DB::table('races')->insert([
            'name'          =>  'semielf',
            'update_skills' =>  'skill+2;strength+2'
        ]);
        DB::table('races')->insert([
            'name'          =>  'orc',
            'update_skills' =>  'skill+2;strength+2'
        ]);
    }
}
