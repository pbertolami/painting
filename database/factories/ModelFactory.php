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
$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName($gender = null|'male'|'female'),
        'last_name' => $faker->lastName,
        'email' => $faker->safeEmail,
        'street' => $faker->streetName,
        'zip' => $faker->postcode,
        'city' => $faker->city,
        'state' => $faker->state,
        'phone' => $faker->phoneNumber,
        'squarefoot' =>$faker->realText($maxNbChars = 200, $indexSize =2),
        'siding' =>$faker->realText($maxNbChars = 200, $indexSize =2),
        'description' =>$faker->realText($maxNbChars = 200, $indexSize =2),

    ];
});
