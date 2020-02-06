<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipsToTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tags', function(Blueprint $table) {
          if (!Schema::hasColumn('tags', 'language_id')) {
              $table->integer('language_id')->unsigned()->nullable();
              $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
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
        Schema::table('tags', function (Blueprint $table) {
            //
        });
    }
}
