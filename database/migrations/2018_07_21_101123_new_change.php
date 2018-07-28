<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewChange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('good_photo', function (Blueprint $table) {
            //
             $table->foreign('Good_id')->references('id')->on('Goods')->onDelete('cascade');
              $table->foreign('Photos_id')->references('id')->on('Photos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('good_photo', function (Blueprint $table) {
            //
        });
    }
}
