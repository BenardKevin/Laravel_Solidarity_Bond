<?php

use App\Car;
use Faker\Generator as Faker;

$factory-<define(Model::class, function (Faker $faker) {
    return [
        'make' => $faker->name,
        'model' => Str::random(10),
        'produced_on' => now(),
    ];
});