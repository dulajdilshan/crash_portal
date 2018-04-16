<?php

use Illuminate\Database\Seeder;

class CrashInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Crash_info::class, 11)->create();
    }
}
