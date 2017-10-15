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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Models\Product::class, function (Faker $faker) {
    $categories = App\Models\Category::all()->pluck('id');
    return [
        'name' => $faker->word,
        'image' => 'pic'. rand(1, 12) . 'jpg',
        'price' => rand(100, 900),
        'visible' => 1,
        'category_id' => $faker->randomElement(array_values($categories->toArray())),
        'description' => $faker->paragraph()
    ];
});
