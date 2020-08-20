<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {

    return [
        'Department_Name' => $faker->word,
        'Date_Created' => $faker->word,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
