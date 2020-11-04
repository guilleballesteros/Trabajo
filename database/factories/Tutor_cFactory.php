<?php

use Faker\Generator as Faker;

$factory->define(App\Tutor_c::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'firstname' => $faker->firstname,
        'enmail' => $faker->safeEmail,
        'phone' => $faker->sentence,
        'cycle_id' => \App\cycle::all()->random()->id,
        //deleted





    ];
});
