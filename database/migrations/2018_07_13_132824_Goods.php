<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Goods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Goods', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('id',true); //length 11
            $table->string('name',255); //255 def
            $table->string('shop_description',255);
            $table->text('description');
            $table->string('icon',255);
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
        Schema::drop('Goods');
    }
}
