<?php

use Faker\Generator as Faker;

$factory->define(App\Crash::class, function (Faker $faker) {
    return [
        'crash_name'=> $faker->name,
        'description'=>$faker->text,
        'uploaded_by'=>$faker->userName,
    ];
});
