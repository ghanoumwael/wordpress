<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categorymodels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('Categorymodels', function (Blueprint $table) {
          $table->increments('id');
          $table->string('categname');
          $table->integer('isdeleted');
          $table->integer('parentid');
          $table->integer('menuelists_id')->unsigned()->unique();
          $table->foreign('menuelists_id')->references('id')->on('menuelists');

          $table->timestamps();
              });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Categorymodels');

    }
}
