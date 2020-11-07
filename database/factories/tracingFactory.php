<?php

use Faker\Generator as Faker;

$factory->define(App\tracing::class, function (Faker $faker) {
    return [
         'type'=>$faker->sentence,
         'reason'=>$faker->sentence,
         'observation'=>$faker->sentence,
         'tutor_c_id'=>\app\user::all()->random()->id,
         'deleted'=>$faker->boolean
    ];
});
