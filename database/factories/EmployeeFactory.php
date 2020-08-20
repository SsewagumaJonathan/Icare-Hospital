<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    return [
        'Name' => $faker->word,
        'Email' => $faker->word,
        'Email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'Status' => $faker->word,
        'Gender' => $faker->word,
        'Role_Name' => $faker->word,
        'City' => $faker->word,
        'State' => $faker->word,
        'Skills' => $faker->text,
        'Password' => $faker->word,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
