<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuLanguegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu__languegs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('menu_id')->unsigned();
            $table->integer('langueg_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menuelists');
            $table->foreign('langueg_id')->references('id')->on('languegs');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu__languegs');
    }
}
