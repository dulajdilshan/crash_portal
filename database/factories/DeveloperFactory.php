<?php

use Faker\Generator as Faker;

$factory->define(App\Developer::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->safeEmail, 	
        'password'=>'$2y$10',
    ];
});
