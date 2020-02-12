<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class IngredientTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [

            ['ingredient_id' => '1','locale' => 'hr','title' => 'Naslov sastojka 1 na HR jeziku'],
            ['ingredient_id' => '1','locale' => 'en','title' => 'Naslov sastojka 1 na EN jeziku'],
            ['ingredient_id'=> '1','locale' => 'de','title' => 'Naslov sastojka 1 na DE jeziku'],

            ['ingredient_id' => '2','locale' => 'hr','title' => 'Naslov sastojka 2 na HR jeziku'],
            ['ingredient_id' => '2','locale' => 'en','title' => 'Naslov sastojka 2 na EN jeziku'],
            ['ingredient_id'=> '2','locale' => 'de','title' => 'Naslov sastojka 2 na DE jeziku'],

            ['ingredient_id' => '3','locale' => 'hr','title' => 'Naslov sastojka 3 na HR jeziku'],
            ['ingredient_id' => '3','locale' => 'en','title' => 'Naslov sastojka 3 na EN jeziku'],
            ['ingredient_id'=> '3','locale' => 'de','title' => 'Naslov sastojka 3 na DE jeziku'],

        ];

        foreach ($items as $item) {
            \App\IngredientTranslation::create($item);
        }

        $faker = Faker\Factory::create();


    }
}
