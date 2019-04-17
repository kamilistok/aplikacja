<?php

use Illuminate\Database\Seeder;
use App\Worker;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $worker = new Worker();
        $worker->name = 'Jan';
        $worker->lastName = 'Nowak';
        $worker->function = 'Doktor';
        $worker->earnings = 5000;
        $worker->save();

        $worker = new Worker();
        $worker->name = 'Krzysztof';
        $worker->lastName = 'Kowal';
        $worker->function = 'Doktor';
        $worker->earnings = 5000;
        $worker->save();

        $worker = new Worker();
        $worker->name = 'Beata';
        $worker->lastName = 'Nowak';
        $worker->function = 'Doktor';
        $worker->earnings = 5000;
        $worker->save();

        $worker = new Worker();
        $worker->name = 'Jan';
        $worker->lastName = 'Mnich';
        $worker->function = 'Recepcjonista';
        $worker->earnings = 3000;
        $worker->save();


    }
}
