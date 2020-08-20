<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MedicineCategory;
use Faker\Generator as Faker;

$factory->define(MedicineCategory::class, function (Faker $faker) {

    return [
        'Categoty_Name' => $faker->word,
        'Description' => $faker->text,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
