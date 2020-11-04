<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'tracing_id' =>\App\tracing::all()->random()->id,
        'enterprise_id' =>\App\enterprise::all()->random()->id,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'kms' => $faker->numberBetween($min = 10, $max = 100),
        'accepted'=> $faker->boolean,
        'deleted'=>$faker->boolean
    ];
});
