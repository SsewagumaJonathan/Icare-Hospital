<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Beds;
use Faker\Generator as Faker;

$factory->define(Beds::class, function (Faker $faker) {

    return [
        'Bed_Number' => $faker->word,
        'Bed_Type' => $faker->word,
        'Description' => $faker->text,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
