<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BloodBank;
use Faker\Generator as Faker;

$factory->define(BloodBank::class, function (Faker $faker) {

    return [
        'Blood_Group' => $faker->word,
        'Status' => $faker->word,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
