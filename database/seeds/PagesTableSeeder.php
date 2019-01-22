<?php

use Illuminate\Database\Seeder;
use App\Pages;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 30; $i++) {
            $page = new Pages();
            $page->name = $faker->firstNameMale;
            $page->lastName = $faker->lastName;
            $page->ZIPcode = $faker->numberBetween($min = 000001, $max = 999999);
            $page->city = $faker->city;
            $page->street = $faker->streetName;
            $page->buildingNumber = $faker->numberBetween($min = 1, $max = 150);
            $page->phoneNumber = $faker->numberBetween($min = 600000000, $max = 999999999);
            $page->doctorID=$faker->numberBetween($min = 1, $max = 3);
            $page->save();
        }
    }
}
