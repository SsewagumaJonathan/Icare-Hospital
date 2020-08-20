<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Appointment;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {

    return [
        'Name' => $faker->word,
        'Email' => $faker->word,
        'Email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'Disease' => $faker->word,
        'Doctors' => $faker->word,
        'Date' => $faker->word,
        'Time' => $faker->date('Y-m-d H:i:s'),
        'Phone_Number' => $faker->word,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
