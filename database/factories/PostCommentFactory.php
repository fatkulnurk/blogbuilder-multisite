<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'body'  => $faker->sentence,
        'post_id'   => rand(1,100),
        'user_id'   => rand(1,50)
    ];
});
