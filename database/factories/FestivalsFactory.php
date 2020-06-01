<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Festival;
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

$factory->define(Festival::class, function (Faker $faker) {
    $start = $faker->dateTimeBetween('now', '+1 year');
    $end = $faker->dateTimeBetween($start, '+1 year');

    return [
        'name'      => $faker->words(3, true),
        'country'   => $faker->country,
        'city'      => $faker->city,
        'starts_at' => $start,
        'ends_at'   => $end,
        'music'     => $faker->randomElement(['dnb', 'pop', 'metal', 'grunge', 'trance']),
        'dayticket' => '&euro; ' . $faker->numberBetween(30, 150),
        'url'       => $faker->url,
        'img'       => 'https://picsum.photos/500/320/?image=' . $faker->numberBetween(0, 1084),
    ];
});
