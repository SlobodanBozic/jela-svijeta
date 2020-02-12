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
            ['slug' => 'sastojak-1'],
            ['slug' => 'sastojak-2'],
            ['slug' => 'sastojak-3'],
        ];

        foreach ($items as $item) {
            \App\Ingredient::create($item);
        }

        $faker = Faker\Factory::create();


        // $limit = 5;
        //
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('ingredients')->insert([ //,

        //     ]);
        // }

    }
}
