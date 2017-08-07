<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubJewelryType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_jewelry_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('jewelry_type_id')->unsigned();
            $table->foreign('jewelry_type_id')->references('id')->on('jewelry_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_jewelry_types');
    }
}
