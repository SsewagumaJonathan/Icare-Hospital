<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Medicine;
use Faker\Generator as Faker;

$factory->define(Medicine::class, function (Faker $faker) {

    return [
        'Name' => $faker->word,
        'Medicine_Categoty' => $faker->word,
        'Description' => $faker->text,
        'Status' => $faker->word,
        'Company' => $faker->word,
        'Price' => $faker->randomDigitNotNull,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
