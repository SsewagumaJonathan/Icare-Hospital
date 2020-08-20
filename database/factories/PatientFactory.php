<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {

    return [
        'Name' => $faker->word,
        'Email' => $faker->word,
        'Email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'Status' => $faker->word,
        'Gender' => $faker->word,
        'Address' => $faker->word,
        'Disease' => $faker->word,
        'Age' => $faker->word,
        'Date_of_Birth' => $faker->word,
        'Blood_Group' => $faker->word,
        'Phone_Number' => $faker->word,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
