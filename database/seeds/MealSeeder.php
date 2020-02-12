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

            ['category_id'=> '1',],
            ['category_id'=> '2',],
            ['category_id'=> NULL,],

            ];

        foreach ($items as $item) {
            \App\Meal::create($item);
        }

        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('meals')->insert([ //,

        //     'category_id' => $faker->numberBetween($min = 1, $max = 3),

        //     ]);
        // }

    }
}
