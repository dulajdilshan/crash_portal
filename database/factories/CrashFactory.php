<?php

use Faker\Generator as Faker;

$factory->define(App\Crash::class, function (Faker $faker) {
    return [
        'crash_title'=> $faker->userName,
        'report_created_at'=>$faker->dateTime,
//        =>str_random(10),
//        'uploaded_by'=>$faker->userName,
    ];
});
