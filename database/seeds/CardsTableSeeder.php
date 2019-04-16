<?php

use Illuminate\Database\Seeder;
use App\Cards;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cards::class, 5)->create();
    }
}
