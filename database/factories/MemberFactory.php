<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Member::class, function (Faker $faker) {
    return [
        
        'firstname' => $faker->name,
        'surname' => $faker->name,
        'middlename' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'occupation' => str_random(10),
        'dob' => $faker->date,
        'active' => random_int(0,1) ,
        'gender' => 'f',
        'marital_status' => 'm',
        'created_at' => $faker->date,

    ];
});
