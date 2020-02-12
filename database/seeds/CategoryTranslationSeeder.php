<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class CategoryTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [

            ['category_id' => '1','locale' => 'hr','title' => 'Naslov kategorije 1 na HR jeziku'],
            ['category_id' => '1','locale' => 'en','title' => 'Naslov kategorije 1 na EN jeziku'],
            ['category_id'=> '1','locale' => 'de','title' => 'Naslov kategorije 1 na DE jeziku'],

            ['category_id' => '2','locale' => 'hr','title' => 'Naslov kategorije 2 na HR jeziku'],
            ['category_id' => '2','locale' => 'en','title' => 'Naslov kategorije 2 na EN jeziku'],
            ['category_id'=> '2','locale' => 'de','title' => 'Naslov kategorije 1 na DE jeziku'],

            ['category_id' => '3','locale' => 'hr','title' => 'Naslov kategorije 3 na HR jeziku'],
            ['category_id' => '3','locale' => 'en','title' => 'Naslov kategorije 3 na EN jeziku'],
            ['category_id'=> '3','locale' => 'de','title' => 'Naslov kategorije 3 na DE jeziku'],

        ];

        foreach ($items as $item) {
            \App\CategoryTranslation::create($item);
        }

        $faker = Faker\Factory::create();

    }
}
