<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {

    return [
        'Skill_Name' => $faker->word,
        'employee_id' => $faker->randomDigitNotNull,
        'Start_Date' => $faker->word,
        'Employee_History' => $faker->text,
        'Skill_Level' => $faker->word,
        'Interviewed_Date' => $faker->date('Y-m-d H:i:s'),
        'Interviewed_Status' => $faker->word,
        'Score' => $faker->word,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
