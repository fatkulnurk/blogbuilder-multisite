<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'  => $faker->sentence,
        'slug'  => \Illuminate\Support\Str::slug($faker->sentence),
        'description' => $faker->text(190)
    ];
});
