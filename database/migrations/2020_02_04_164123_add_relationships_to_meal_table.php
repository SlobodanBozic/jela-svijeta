<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipsToMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('meals', function(Blueprint $table) {
          if (!Schema::hasColumn('meals', 'category_id')) {
              $table->integer('category_id')->unsigned()->nullable();
              $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
              }
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meal', function (Blueprint $table) {
            //
        });
    }
}
