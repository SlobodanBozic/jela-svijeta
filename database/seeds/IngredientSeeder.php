<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class IngredientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [
            ['title' => 'Naslov sastojka 1 ENG', 'slug' => 'sastojak-1', 'language_id' => '1',],
            ['title' => 'Naslov sastojka 1 HR', 'slug' => 'sastojak-1', 'language_id' => '2',],
            ['title' => 'Naslov sastojka 1 DE', 'slug' => 'sastojak-1', 'language_id' => '3',],

            ['title' => 'Naslov sastojka 2 ENG', 'slug' => 'sastojak-2', 'language_id' => '1',],
            ['title' => 'Naslov sastojka 2 HR', 'slug' => 'sastojak-2', 'language_id' => '2',],
            ['title' => 'Naslov sastojka 2 DE', 'slug' => 'sastojak-2', 'language_id' => '3',],


            ['title' => 'Naslov sastojka 3 ENG', 'slug' => 'sastojak-3', 'language_id' => '1',],
            ['title' => 'Naslov sastojka 3 HR', 'slug' => 'sastojak-3', 'language_id' => '2',],
            ['title' => 'Naslov sastojka 3 DE', 'slug' => 'sastojak-3', 'language_id' => '3',],

            ['title' => 'Naslov sastojka 4 ENG', 'slug' => 'sastojak-4', 'language_id' => '1',],
            ['title' => 'Naslov sastojka 4 HR', 'slug' => 'sastojak-4', 'language_id' => '2',],
            ['title' => 'Naslov sastojka 4 DE', 'slug' => 'sastojak-4', 'language_id' => '3',],

            ['title' => 'Naslov sastojka 5 ENG', 'slug' => 'sastojak-5', 'language_id' => '1',],
            ['title' => 'Naslov sastojka 5 HR', 'slug' => 'sastojak-5', 'language_id' => '2',],
            ['title' => 'Naslov sastojka 5 DE', 'slug' => 'sastojak-5', 'language_id' => '3',],

            ['title' => 'Naslov sastojka 6 na ENG', 'slug' => 'sastojak-6', 'language_id' => '1',],
            ['title' => 'Naslov sastojka 6 HR', 'slug' => 'sastojak-5', 'language_id' => '2',],
            ['title' => 'Naslov sastojka 6 DE', 'slug' => 'sastojak-6', 'language_id' => '3',],

            ['title' => 'Naslov sastojka 7 na ENG', 'slug' => 'sastojak-7', 'language_id' => '1',],
            ['title' => 'Naslov sastojka 7 HR', 'slug' => 'sastojak-7', 'language_id' => '2',],
            ['title' => 'Naslov sastojka 7 na DE', 'slug' => 'sastojak-7', 'language_id' => '3',],

        ];

        foreach ($items as $item) {
            \App\Ingredient::create($item);
        }

        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('ingredients')->insert([ //,
        //         'title' => $faker->unique()->word,
        //         'slug' => $faker->unique()->slug,
        //         'language_id' => $faker->numberBetween($min = 1, $max = 3)
        //     ]);
        // }

    }
}
