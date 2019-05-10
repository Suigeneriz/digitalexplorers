<?php

use Faker\Generator as Faker;

'','','','','','','','',''

$factory->define(App\Models\Company::class, function (Faker $faker) {
   return [
        'company_id' => $faker->word,
        'vat' => $faker->randomFloat(2, 1, 100),
        'manager' => $faker->paragraph(random_int(1, 10)),
        'employees' => $faker->word,
        'average_salary' => $faker->word,
        'social_insurance_taxes' => $faker->word,
        'turnover' => $faker->word,
        'social_media_likes' => $faker->word,
        'social_media_followers' => $faker->word
    ];
});
