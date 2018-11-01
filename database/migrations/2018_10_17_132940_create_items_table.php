<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
             $table->increments('id');
            $table->timestamps();

            $table->integer('isdeleted');

            $table->integer('Categorymodels_id')->unsigned();
            $table->foreign('Categorymodels_id')->references('id')->on('Categorymodels');
            $table->string('title');
            $table->text('descreption');
            $table->text('itemlink');
            $table->text('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
