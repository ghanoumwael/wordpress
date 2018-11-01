<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemLanguegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item__languegs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('item_id')->unsigned();
            $table->integer('langueg_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('langueg_id')->references('id')->on('languegs');
            $table->text('title');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item__languegs');
    }
}
