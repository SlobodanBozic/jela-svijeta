<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class MealSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [

            ['title' => 'Naslov jela 1 na HRV jezik', 'slug' => 'jelo-1', 'description' => 'Opis jela 1 na HRV jeziku','category_id'=> '1','language_id'=> '2'],
            ['title' => 'Naslov jela 2 na HRV jeziku', 'slug' => 'jelo-2', 'description' => 'Opis jela 2 na HRV jeziku','category_id'=> null,'language_id'=> '2'],
            ['title' => 'Naslov jela 3 na HRV jeziku', 'slug' => 'jelo-3', 'description' => 'Opis jela 3 na HRV jeziku','category_id'=> '3','language_id'=> '2'],
            ['title' => 'Naslov jela 4 na HRV jeziku', 'slug' => 'jelo-4', 'description' => 'Opis jela 4 na HRV jeziku','category_id'=> '4','language_id'=> '2'],
            ['title' => 'Naslov jela 5 na HRV jeziku', 'slug' => 'jelo-5', 'description' => 'Opis jela 5 na HRV jeziku','category_id'=> '5','language_id'=> '2'],
            ['title' => 'Naslov jela 6 na ENG jeziku', 'slug' => 'jelo-6', 'description' => 'Opis jela 6 na ENG jeziku','category_id'=> '5','language_id'=> '1'],
            ['title' => 'Naslov jela 7 na DE jeziku', 'slug' => 'jelo-7', 'description' => 'Opis jela 7 na DE jeziku','category_id'=> '5','language_id'=> '3'],
            ];

        foreach ($items as $item) {
            \App\Meal::create($item);
        }

        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('meals')->insert([ //,
        //         'title' => $faker->unique()->word,
        //         'slug' => $faker->unique()->slug,
        //         'description' => $faker->unique()->word,
        //         'category_id' => $faker->numberBetween($min = 1, $max = 3),
        //         'language_id' => $faker->numberBetween($min = 1, $max = 3)
        //     ]);
        // }

    }
}
