<?php

use Faker\Generator as Faker;

$factory->define(App\Crash::class, function (Faker $faker) {
    return [
        'crash_title'=> $faker->userName,
        'report_created_at'=>$faker->dateTime,
        'developer_id'=>rand(1,25),
        'progress'=>rand(0,100),
        'solved'=>0,
        'development_status'=>"NO STATUS",
//        =>str_random(10),
//        'uploaded_by'=>$faker->userName,
    ];
});
