<?php

use Faker\Generator as Faker;

$factory->define(App\Developer_request::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->safeEmail,
        'user_name'=>$faker->userName,
        'github_url'=>$faker->url,
        'linkedin_url'=>$faker->url,
        'fb_url'=>$faker->url,
        'admin_confirmed'=> 0,
        'developer_added'=> 0,
        'email_sent'=>0,
    ];
});
