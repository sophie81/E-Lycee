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

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $id = rand(1,9);
    return [
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'abstract' => $faker->paragraph(1),
        'content' => $faker->paragraph(3),
        'user_id' => '1',
        'url_thumbnail' => "http://lorempicsum.com/up/370/235/$id",
        'date' => $faker->dateTime($max = 'now'),
    ];
});
