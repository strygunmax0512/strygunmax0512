<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Girl::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => random_int(20, 45),
        'height' => random_int(150, 180),
        'width' => random_int(40, 70),
    ];
});
