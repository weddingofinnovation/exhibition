<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagazineIdToPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->bigInteger('magazine_id')->unsigned()->nullable();
            $table->foreign('magazine_id')->references('id')->on('magazines')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->bigInteger('magazine_id')->unsigned()->nullable();
            $table->foreign('magazine_id')->references('id')->on('magazines')->onDelete('cascade');
        });
    }
}
