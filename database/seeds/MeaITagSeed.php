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
