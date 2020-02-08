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
            ['title' => 'Naslov kategorije 1 na ENG jeziku', 'slug' => 'category-1', 'language_id' => '1',],
            ['title' => 'Naslov kategorije 1 na HRV jeziku', 'slug' => 'category-1', 'language_id' => '2',],
            ['title' => 'Naslov kategorije 1 na DE jeziku', 'slug' => 'category-1', 'language_id' => '3',],

            ['title' => 'Naslov kategorije 2 na ENG jeziku', 'slug' => 'category-2', 'language_id' => '1',],
            ['title' => 'Naslov kategorije 2 na HRV jeziku', 'slug' => 'category-2', 'language_id' => '2',],
            ['title' => 'Naslov kategorije 2 na DE jeziku', 'slug' => 'category-2', 'language_id' => '3',],


        ];

        foreach ($items as $item) {
            \App\Category::create($item);
        }


        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('categories')->insert([ //,
        //         'title' => $faker->unique()->sentence,
        //         'slug' => $faker->unique()->slug,
        //         'language_id' => $faker->numberBetween($min = 1, $max = 3)
        //     ]);
        // }

    }
}
