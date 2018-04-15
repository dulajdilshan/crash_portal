<?php

use Illuminate\Database\Seeder;

class ReportersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Reporter::class, 5)->create();
    }
}
