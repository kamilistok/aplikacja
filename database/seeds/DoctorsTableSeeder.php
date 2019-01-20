<?php

use Illuminate\Database\Seeder;
use App\Doctors;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor = new Doctors();
        $doctor->name = 'Jan';
        $doctor->lastName = 'Nowak';
        $doctor->specialization = 'Alergologia';
        $doctor->save();

        $doctor = new Doctors();
        $doctor->name = 'Stanisław';
        $doctor->lastName = 'Kowalczyk';
        $doctor->specialization = 'Okulistyka';
        $doctor->save();

        $doctor = new Doctors();
        $doctor->name = 'Janusz';
        $doctor->lastName = 'Nosacz';
        $doctor->specialization = 'Psychiatria';
        $doctor->save();

    }
}
