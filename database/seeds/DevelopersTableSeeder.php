<?php

use Illuminate\Database\Seeder;
use App\Developer;

class DevelopersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Developer::class, 25)->create();
    }
}
