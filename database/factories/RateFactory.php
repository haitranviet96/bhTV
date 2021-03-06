<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Rate::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,99),
        'film_id' => $faker->numberBetween(1,240),
        'rate' => $faker->numberBetween(3,10),
    ];
});
