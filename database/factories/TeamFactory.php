<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Team::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'head' => random_int(0,1) ,
        'active' => random_int(0,1) ,
        'created_at' => $faker->date,
        'updated_at' => $faker->date
    ];
});
