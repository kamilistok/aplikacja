<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientsTableSeeder extends Seeder
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
            $patient = new Patient();
            $patient->name = $faker->firstNameMale;
            $patient->lastName = $faker->lastName;
            $patient->ZIPcode = $faker->numberBetween($min = 000001, $max = 999999);
            $patient->PESEL = 99999999999;
            $patient->city = $faker->city;
            $patient->street = $faker->streetName;
            $patient->buildingNumber = $faker->numberBetween($min = 1, $max = 150);
            $patient->phoneNumber = $faker->numberBetween($min = 600000000, $max = 999999999);
            $patient->save();
        }
    }

}
