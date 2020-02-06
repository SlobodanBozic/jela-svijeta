<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(! Schema::hasTable('meal_ingredient')) {
          Schema::create('meal_ingredient', function (Blueprint $table) {
              $table->integer('meal_id')->unsigned();
              $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
              $table->integer('ingredient_id')->unsigned();
              $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
          });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_ingredient');
    }
}
