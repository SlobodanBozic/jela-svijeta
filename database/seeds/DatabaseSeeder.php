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
      $this->call(LanguageSeed::class);
      $this->call(CategorySeed::class);
      $this->call(IngredientSeed::class);
      $this->call(TagSeed::class);
      $this->call(MealSeed::class);
      $this->call(MeaIingredientSeed::class);
      $this->call(MealTagSeed::class);

    }
}
