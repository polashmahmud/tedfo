<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categori;
use Faker\Generator as Faker;

$factory->define(Categori::class, function (Faker $faker) {
    return [
        'title' => $faker->name(),
    ];
});
