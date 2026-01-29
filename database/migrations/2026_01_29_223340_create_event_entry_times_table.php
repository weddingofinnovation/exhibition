<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventEntryTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_entry_times', function (Blueprint $table) {
            $table->id();
             

            $table->date('day_from');
            $table->date('day_to');

            $table->string('entry_type')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->text('notes')->nullable();

              $table->string('status')->nullable();
            $table->string('admstatus')->nullable();
            
            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('event_entry_times');
    }
}
