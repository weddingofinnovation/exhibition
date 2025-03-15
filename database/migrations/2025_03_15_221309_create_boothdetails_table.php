<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoothdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boothdetails', function (Blueprint $table) {
            $table->id();
            $table->string('floorPlan')->nullable();
            $table->string('stallsize')->nullable();
            $table->string('boothnumber')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('openside')->nullable();
            $table->string('serviceType')->nullable();
            $table->string('budget')->nullable();

            $table->string('brandingdesigntheme')->nullable();
            $table->string('estimatebudget')->nullable();
            $table->string('displaysetup')->nullable();
            $table->string('storagespace')->nullable();
            $table->string('furniture')->nullable();
            $table->string('lightingpreferences')->nullable();
            $table->string('meetingarea')->nullable();
            $table->string('powerconnectivity')->nullable();
            $table->string('digitalengagement')->nullable();
            $table->string('additionalstaffing')->nullable();
            $table->string('requirement')->nullable();

            $table->string('requirement1')->nullable();
            $table->string('requirement2')->nullable();
            $table->string('requirement3')->nullable();
            $table->string('requirement4')->nullable();
            $table->string('requirement5')->nullable();

            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('lead_id')->unsigned()->nullable();
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');

            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');

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
        Schema::dropIfExists('boothdetails');
    }
}
