<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTableGoodPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Good_photo', function (Blueprint $table) {
            //
            $table->foreign('Good_id')->references('id')->on('Goods');
            //->onDelete('cascade');
            $table->foreign('Photos_id')->references('id')->on('Photos');
            //->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Good_photo', function (Blueprint $table) {
            //
        });
    }
}
