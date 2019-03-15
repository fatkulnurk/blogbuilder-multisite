<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\UserDetail::class, function (Faker $faker) {
    return [
        'first_name'    => $faker->firstName,
        'last_name'     => $faker->lastName,
        'birthday'      => $faker->date(),
        'address'       => $faker->text(190),
        'phone_number'  => $faker->phoneNumber,
        'bio'           => $faker->text(190)
    ];
});
