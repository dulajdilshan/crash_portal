<?php

use Faker\Generator as Faker;

$factory->define(App\Crash::class, function (Faker $faker) {
    return [
        'crash_name'=> $faker->name,
        'description'=>str_random(10),
        'uploaded_by'=>$faker->userName,
    ];
});
