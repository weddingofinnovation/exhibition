<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('eventname')->nullable();
            $table->string('event_start_date')->nullable();
            $table->string('event_end_date')->nullable();
            $table->string('booth_number')->nullable();
            $table->string('brand_name')->nullable();
            
            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('hostess_id')->unsigned()->nullable();
            $table->foreign('hostess_id')->references('id')->on('hostesses')->onDelete('cascade');
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
        Schema::dropIfExists('experiences');
    }
}
