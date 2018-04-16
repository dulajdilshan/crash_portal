<?php

use Faker\Generator as Faker;

$factory->define(App\Crash_info::class, function (Faker $faker) {
    return [
        'crash_id'=>$faker->unique()->numberBetween(1,11),
        'category'=>$faker->word,
        'crash_details'=>$faker->sentence,
        'reporter_id'=>rand(1,5),
    ];
});
