<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(! Schema::hasTable('categories')) {
          Schema::create('categories', function (Blueprint $table) {
              $table->increments('id');
              $table->string('slug')->nullable();
              $table->softDeletes();
              $table->index(['deleted_at']);
          });
      }

      if(! Schema::hasTable('category_translations')) {
        Schema::create('category_translations', function(Blueprint $table)
          {
              $table->increments('id');
              $table->integer('category_id')->unsigned();
              $table->string('locale')->index();
              $table->string('title')->nullable();
              $table->unique(['category_id','locale']);
              $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('categories');
    }
}
