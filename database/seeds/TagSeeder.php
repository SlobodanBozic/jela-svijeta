<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class TagSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [

            ['title' => 'tag 1 HRV', 'slug' => 'tag-1-hrv', 'language_id' => '2',],
            ['title' => 'tag 1 ENG', 'slug' => 'tag-1-en', 'language_id' => '1',],
            ['title' => 'tag 1 DE', 'slug' => 'tag-1-de', 'language_id' => '3',],

            ['title' => 'tag 2 HRV', 'slug' => 'tag-2-hrv', 'language_id' => '2',],
            ['title' => 'tag 2 ENG', 'slug' => 'tag-2-en', 'language_id' => '1',],
            ['title' => 'tag 2 DE', 'slug' => 'tag-2-de', 'language_id' => '3',],

            ['title' => 'tag 3 HRV', 'slug' => 'tag-3-hrv', 'language_id' => '2',],
            ['title' => 'tag 3 ENG', 'slug' => 'tag-3-en', 'language_id' => '1',],
            ['title' => 'tag 3 DE', 'slug' => 'tag-3-de', 'language_id' => '3',],

        ];

        foreach ($items as $item) {
            \App\Tag::create($item);
        }

        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('tags')->insert([ //,
        //         'title' => $faker->unique()->word,
        //         'slug' => $faker->unique()->slug,
        //         'language_id' => $faker->numberBetween($min = 1, $max = 3)
        //     ]);
        // }

    }
}
