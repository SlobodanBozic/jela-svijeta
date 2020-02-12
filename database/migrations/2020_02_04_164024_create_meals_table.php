<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(! Schema::hasTable('meals')) {
          Schema::create('meals', function (Blueprint $table) {
              $table->increments('id');
              $table->string('status')->default('created');
              $table->timestamps();
              $table->softDeletes();

              $table->index(['deleted_at']);
          });
      }

      if(! Schema::hasTable('meal_translations')) {
        Schema::create('meal_translations', function(Blueprint $table)
          {
              $table->increments('id');
              $table->integer('meal_id')->unsigned();
              $table->string('locale')->index();

              $table->string('title');
              $table->string('slug');
              $table->string('description');

              $table->unique(['meal_id','locale']);
              $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
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
        Schema::dropIfExists('meals');
    }
}
