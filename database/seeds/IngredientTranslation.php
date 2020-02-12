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

            ['ingredient_id' => '1','locale' => 'hr','title' => 'Naslov sastojka 1 na HR jeziku', 'slug' => 'sastojak-1-hr'],
            ['ingredient_id' => '1','locale' => 'en','title' => 'Naslov sastojka 1 na EN jeziku', 'slug' => 'sastojak-1-en',],
            ['ingredient_id'=> '1','locale' => 'de','title' => 'Naslov sastojka 1 na DE jeziku', 'slug' => 'sastojak-1-de',],

            ['ingredient_id' => '2','locale' => 'hr','title' => 'Naslov sastojka 2 na HR jeziku', 'slug' => 'sastojak-2-hr',],
            ['ingredient_id' => '2','locale' => 'en','title' => 'Naslov sastojka 2 na EN jeziku', 'slug' => 'sastojak-2-en',],
            ['ingredient_id'=> '2','locale' => 'de','title' => 'Naslov sastojka 2 na DE jeziku', 'slug' => 'sastojak-2-de'],

            ['ingredient_id' => '3','locale' => 'hr','title' => 'Naslov sastojka 3 na HR jeziku', 'slug' => 'sastojak-3-hr',],
            ['ingredient_id' => '3','locale' => 'en','title' => 'Naslov sastojka 3 na EN jeziku', 'slug' => 'sastojak-3-en',],
            ['ingredient_id'=> '3','locale' => 'de','title' => 'Naslov sastojka 3 na DE jeziku', 'slug' => 'sastojak-3-de',],

        ];

        foreach ($items as $item) {
            \App\IngredientTranslation::create($item);
        }

        $faker = Faker\Factory::create();


    }
}
