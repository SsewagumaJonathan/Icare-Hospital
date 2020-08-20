<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BloodDonor;
use Faker\Generator as Faker;

$factory->define(BloodDonor::class, function (Faker $faker) {

    return [
        'Name' => $faker->word,
        'Email' => $faker->word,
        'Email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'Gender' => $faker->word,
        'Age' => $faker->word,
        'Address' => $faker->word,
        'Blood_Group' => $faker->word,
        'Donate_Date' => $faker->date('Y-m-d H:i:s'),
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
