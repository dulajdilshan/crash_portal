<?php

use Faker\Generator as Faker;

$factory->define(App\Reporter::class, function (Faker $faker) {
    return [
        'ip_address'=>$faker->ipv4,
        'device_info'=>$faker->userName,
    ];
});
