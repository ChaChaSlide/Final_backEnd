<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJewelryPiece extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jewelry_pieces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sub_jewelry_type_id')->unsigned();
            $table->foreign('sub_jewelry_type_id')->references('id')->on('sub_jewelry_types');
            $table->string('description', 400);
            $table->integer('price');
            $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jewelry_pieces');
    }
}
