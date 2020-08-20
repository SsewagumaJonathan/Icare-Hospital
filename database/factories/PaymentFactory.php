<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {

    return [
        'Patient_Name' => $faker->word,
        'Payment_Date' => $faker->date('Y-m-d H:i:s'),
        'Time' => $faker->word,
        'Transaction_id' => $faker->word,
        'invoice_id' => $faker->randomDigitNotNull,
        'Amount' => $faker->randomDigitNotNull,
        'Payment_Method' => $faker->word,
        'Description' => $faker->text,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
