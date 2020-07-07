<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Service::class, function (Faker $faker) {
    return [
        'sex_classic' => random_int(0 , 1),
        'sex_with_gandon' => random_int(0 , 1),
        'sex_with_no_gandon' => random_int(0 , 1),
        'minet_with_gandon' => random_int(0 , 1),
        'minet_with_no_gandon' => random_int(0 , 1),
        'anal' => random_int(0 , 1),
        'kiss' => random_int(0 , 1),
        'group_sex' => random_int(0 , 1),
        'lezbi' => random_int(0 , 1),
    ];
});
