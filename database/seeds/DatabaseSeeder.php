<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(CategorySeed::class);
      $this->call(CategoryTranslationSeeder::class);
      $this->call(MealSeed::class);
      $this->call(MealTranslationSeeder::class);
      $this->call(IngredientSeed::class);
      $this->call(IngredientTranslationSeeder::class);
      $this->call(TagSeed::class);
      $this->call(TagTranslationSeeder::class);
      $this->call(MeaIingredientSeed::class);
      $this->call(MealTagSeed::class);

    }
}
