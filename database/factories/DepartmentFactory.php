<?php

use Faker\Generator as Faker;


$factory->define(App\Models\Department::class, function (Faker $faker) {
    return [
        'name' => str_random(10),
        'head' => random_int(0,50),
        'team_id' => random_int(1,10),
        'active' => random_int(0,1),
        
    ];
});
