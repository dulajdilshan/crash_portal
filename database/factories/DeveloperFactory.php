<?php

use Faker\Generator as Faker;

$factory->define(App\Developer::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->unique()->numberBetween(1,25),
        'name'=>$faker->name,
        'email'=>$faker->safeEmail,
        'user_name'=>$faker->userName,
        'github_url'=>$faker->url,
        'linkedin_url'=>$faker->url,
        'fb_url'=>$faker->url,
        'about'=>str_random(10),
    ];
});
