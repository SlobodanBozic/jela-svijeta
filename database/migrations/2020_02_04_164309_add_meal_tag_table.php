<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(! Schema::hasTable('meal_tag')) {
          Schema::create('meal_tag', function (Blueprint $table) {
              $table->integer('meal_id')->unsigned();
              $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
              $table->integer('tag_id')->unsigned();
              $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('meal_tag');
    }
}
