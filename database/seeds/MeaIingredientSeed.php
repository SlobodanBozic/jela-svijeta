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

            ['meal_id' => '1', 'ingredient_id' => '3'],
            ['meal_id' => '2', 'ingredient_id' => '2'],
            ['meal_id' => '3', 'ingredient_id' => '1'],
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
