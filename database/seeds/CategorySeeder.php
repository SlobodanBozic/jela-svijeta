<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [
            [],
            [],
            [],


        ];

        foreach ($items as $item) {
            \App\Category::create($item);
        }


        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('categories')->insert([ //,
        //     ]);
        // }

    }
}
