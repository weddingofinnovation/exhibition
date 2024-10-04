<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostesses', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('aliasname')->nullable();
            $table->string('slug')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('qualification')->nullable();
            $table->string('height')->nullable();
            $table->string('uniqueCode')->nullable(); 

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
        Schema::dropIfExists('hostesses');
    }
}
