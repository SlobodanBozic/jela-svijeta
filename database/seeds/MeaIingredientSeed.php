<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class MeaIingredientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [
            // 1. meal on 3 languages
            ['meal_id' => '1', 'ingredient_id' => '2'],
            ['meal_id' => '1', 'ingredient_id' => '5'],
            ['meal_id' => '2', 'ingredient_id' => '1'],
            ['meal_id' => '2', 'ingredient_id' => '4'],
            ['meal_id' => '3', 'ingredient_id' => '3'],
            ['meal_id' => '3', 'ingredient_id' => '6'],

            // 2. meal on 3 languages
            ['meal_id' => '4', 'ingredient_id' => '8'],
            ['meal_id' => '5', 'ingredient_id' => '7'],
            ['meal_id' => '6', 'ingredient_id' => '9'],

            // 2. meal on 3 languages
            ['meal_id' => '7', 'ingredient_id' => '2'],
            ['meal_id' => '8', 'ingredient_id' => '1'],
            ['meal_id' => '9', 'ingredient_id' => '3'],
        ];

        foreach ($items as $item) {
            \App\MeaIingredient::create($item);
        }

        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('meal_ingredient')->insert([ //,
        //         'meal_id' => $faker->numberBetween($min = 1, $max = 5),
        //         'ingredient_id' => $faker->numberBetween($min = 1, $max = 5),
        //     ]);
        // }

    }
}
