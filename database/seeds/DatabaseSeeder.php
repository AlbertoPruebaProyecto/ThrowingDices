<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserDefaultSeeder::class);
        $this->call(LevelTableSeeder::class);
        $this->call(RaceTableSeeder::class);
        $this->call(BarbarianSeeder::class);
        $this->call(BardSeeder::class);
        $this->call(PaladinSeeder::class);
        $this->call(SpellSeeder::class);
        $this->call(MoneySeeder::class);
        $this->call(WeaponSeeder::class);
    }
}
