<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class MealTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [

            ['meal_id' => '1','locale' => 'hr','title' => 'Naslov jela 1 HR na jezik', 'description' => 'Opis jela 1 na HR jeziku'],
            ['meal_id' => '1','locale' => 'en','title' => 'Naslov jela 2 na EN jezik', 'description' => 'Opis jela 1 na EN jeziku'],
            ['meal_id'=> '1','locale' => 'de','title' => 'Naslov jela 2 na DE jezik','description' => 'Opis jela 1 na DE jeziku'],

            ['meal_id' => '2','locale' => 'hr','title' => 'Naslov jela 2 na HR jezik', 'description' => 'Opis jela 1 na HR jeziku'],
            ['meal_id' => '2','locale' => 'en','title' => 'Naslov jela 2 na EN jezik', 'description' => 'Opis jela 2 na EN jeziku'],
            ['meal_id'=> '2','locale' => 'de','title' => 'Naslov jela 2 na DE jezik', 'description' => 'Opis jela na DE jeziku'],

            ['meal_id' => '3','locale' => 'hr','title' => 'Naslov jela 3 na HR jezik', 'description' => 'Opis jela 3 na HR jeziku'],
            ['meal_id' => '3','locale' => 'en','title' => 'Naslov jela 3 na EN jezik', 'description' => 'Opis jela 3 na EN jeziku'],
            ['meal_id'=> '3','locale' => 'de','title' => 'Naslov jela 3 na DE jezik', 'description' => 'Opis jela 3 na DE jeziku'],

        ];

        foreach ($items as $item) {
            \App\MealTranslation::create($item);
        }

        $faker = Faker\Factory::create();

    }
}
