<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parnt;
use Faker\Generator as Faker;

$factory->define(Parnt::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'phone' => $faker->unique()->e164PhoneNumber,
        'job' => $faker->jobTitle,
        'age' =>$faker->numberBetween(20,50),
        'gender' => 'male',
        'address' => $faker->address,
    ];
});
