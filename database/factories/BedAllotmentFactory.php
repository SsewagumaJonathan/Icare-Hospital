<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BedAllotment;
use Faker\Generator as Faker;

$factory->define(BedAllotment::class, function (Faker $faker) {

    return [
        'Bed_Number' => $faker->word,
        'patients_id' => $faker->randomDigitNotNull,
        'Allotment_Type' => $faker->word,
        'Discharge_Time' => $faker->date('Y-m-d H:i:s'),
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
