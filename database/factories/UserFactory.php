<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Movement;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Movement::class, function (Faker $faker){
    return [
        "type" => $faker->randomElement(["Egreso","Ingreso"]),
        "movement_date" => $faker->date(),
        "category_id" => $faker->numberBetween(1, 10),
        "description" => $faker->paragraph(),
        "money" => $faker->numberBetween(1000, 99000),
        "image" => "http://lorempixel.com/852/480"
    ];
});
