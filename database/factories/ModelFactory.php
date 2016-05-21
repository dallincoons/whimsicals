<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
//        'quantity' => $faker->numberBetween(1, 50),
//        'price' => $faker->randomFloat(2, 1, 1000),
        'description' => $faker->paragraph
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'start_date' => $faker->dateTimeBetween('now', '+2 years'),
        'start_month' => '1',
        'start_day' => '1',
        'start_year' => '2016',
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'venue_details' => $faker->sentence,
        'venue_name' => $faker->word,
        'details' => $faker->paragraph
    ];
});
