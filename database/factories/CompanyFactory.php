<?php

use Faker\Generator as Faker;


$factory->define(App\Models\Company::class, function (Faker $faker) {
   return [
        'name' => $faker->word,
        'type' => $faker->randomFloat(2, 1, 100),
        'business_form' => $faker->paragraph(random_int(1, 10)),
        'company_code' => $faker->word,
        'registration_code' => $faker->word,
        'email' => $faker->word,
        'address' => $faker->word,
        'mobile' => $faker->word,
        'avtivation_status' => $faker->word,
        'registration_date' => $faker->date("Y-M-D");
    ];
});
