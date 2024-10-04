<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skillios', function (Blueprint $table) {
            $table->id();

            $table->string('skill')->nullable();
            $table->string('read')->nullable();
            $table->string('write')->nullable();
            $table->string('speak')->nullable();
            $table->string('level')->nullable();

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
        Schema::dropIfExists('skillios');
    }
}
