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
        $this->call(CrashesTableSeeder::class);
        $this->call(DevelopersTableSeeder::class);
        $this->call(DeveloperRequestsTableSeeder::class);
        $this->call(ReportersTableSeeder::class);
    }
}
