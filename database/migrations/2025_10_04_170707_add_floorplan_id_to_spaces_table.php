<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFloorplanIdToSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spaces', function (Blueprint $table) {
             $table->bigInteger('floorplan_id')->unsigned()->nullable();
            $table->foreign('floorplan_id')->references('id')->on('floorplans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spaces', function (Blueprint $table) {
           $table->bigInteger('floorplan_id')->unsigned()->nullable();
            $table->foreign('floorplan_id')->references('id')->on('floorplans')->onDelete('cascade');
        });
    }
}
