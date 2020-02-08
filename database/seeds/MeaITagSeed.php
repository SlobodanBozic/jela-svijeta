<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class MealTagSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [

            ['meal_id' => '1', 'tag_id' => '1'],
            ['meal_id' => '2', 'tag_id' => '2'],
            ['meal_id' => '3', 'tag_id' => '3'],

            ['meal_id' => '4', 'tag_id' => '4'],
            ['meal_id' => '5', 'tag_id' => '5'],
            ['meal_id' => '6', 'tag_id' => '6'],

            ['meal_id' => '7', 'tag_id' => '7'],
            ['meal_id' => '8', 'tag_id' => '8'],
            ['meal_id' => '9', 'tag_id' => '9'],

        ];

        foreach ($items as $item) {
            \App\MeaITag::create($item);
        }

        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('meal_tag')->insert([ //,
        //         'meal_id' => $faker->numberBetween($min = 1, $max = 5),
        //         'tag_id' => $faker->numberBetween($min = 1, $max = 5),
        //     ]);
        // }

    }
}
