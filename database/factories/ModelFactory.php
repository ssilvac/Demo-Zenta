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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {

    $carbon = \Carbon\Carbon::now();

    return [
        'title'    => $faker->sentence,
        'description'  => $faker->paragraph,
        'user_id'  => rand(1,5),
        'category_id' => rand(1,3),
        'created_at' => $carbon->format('Y-m-d H:i:s'),
        'updated_at' => $carbon->format('Y-m-d H:i:s')
    ];
});
