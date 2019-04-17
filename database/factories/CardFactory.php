<?php

use Faker\Generator as Faker;

$factory->define(App\Card::class, function (Faker $faker) {
    return [
        'blood'=>$faker->word,
        'addiction' => $faker->text,
        'medicines' => $faker->text,
        'diseases' => $faker->text,
        'patient_id' => $faker->randomElement(App\Patient::pluck('id')->toArray())

    ];
});
