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

            [],
            [],
            [],

        ];

        foreach ($items as $item) {
            \App\Tag::create($item);
        }

        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('tags')->insert([ //,
    
        //     ]);
        // }

    }
}
