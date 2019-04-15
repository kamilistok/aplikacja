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

        for($i = 0; $i < 3; $i++) {
            $page = new Pages();
            $page->title = 'Przykładowa notatka';
            $page->content = 'Lorem ipsum';
            $page->save();
        }
    }
}
