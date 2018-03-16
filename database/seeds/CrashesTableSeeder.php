<?php

use Illuminate\Database\Seeder;

class CrashesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Crash::class, 5)->create();
    }
}
