<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence($nbWords = 3),
        'synopsis'=>$faker->paragraph($nbSentences = 15),
        'director'=>$faker->name,
        'release_date'=>$faker->dateTime,
        'genus'=>$faker->word
    ];
});
