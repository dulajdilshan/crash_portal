<?php

use Faker\Generator as Faker;

$factory->define(App\Crash::class, function (Faker $faker) {
    return [
        'crash_title'=> $faker->userName,
        'report_created_at'=>$faker->dateTime,
        'developer_id'=>rand(1,100),
        'progress'=>rand(0,100),
        'solved'=>rand(0,1),
//        =>str_random(10),
//        'uploaded_by'=>$faker->userName,
    ];
});
