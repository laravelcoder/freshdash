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
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(AdsclientsTableSeeder::class);
        $this->call(ClinicsTableSeeder::class);
        $this->call(AnalyticsclientsTableSeeder::class);
    }
}
