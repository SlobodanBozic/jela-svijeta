<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class TagTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [

            ['tag_id' => '1','locale' => 'hr','title' => 'Naslov tag-a 1 na HR jeziku'],
            ['tag_id' => '1','locale' => 'en','title' => 'Naslov tag-a 1 na EN jeziku'],
            ['tag_id'=> '1','locale' => 'de','title' => 'Naslov tag-a 1 na DE jeziku'],

            ['tag_id' => '2','locale' => 'hr','title' => 'Naslov tag-a 2 na HR jeziku'],
            ['tag_id' => '2','locale' => 'en','title' => 'Naslov tag-a 1 na EN jeziku'],
            ['tag_id'=> '2','locale' => 'de','title' => 'Naslov tag-a 1 na DE jeziku'],

            ['tag_id' => '3','locale' => 'hr','title' => 'Naslov tag-a 3 na HR jeziku'],
            ['tag_id' => '3','locale' => 'en','title' => 'Naslov tag-a 3 na EN jeziku'],
            ['tag_id'=> '3','locale' => 'de','title' => 'Naslov tag-a 3 na DE jeziku'],

        ];

        foreach ($items as $item) {
            \App\TagTranslation::create($item);
        }

        $faker = Faker\Factory::create();


    }
}
