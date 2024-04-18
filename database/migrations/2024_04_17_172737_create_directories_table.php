<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('directories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->string('stall')->nullable();
            $table->string('hall')->nullable();
            $table->string('category')->nullable();
            $table->string('product')->nullable();
            $table->string('company')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('about')->nullable();
            $table->enum('callverify', ['1','0'])->nullable();
            $table->enum('emailverify', ['1','0'])->nullable();
            $table->enum('status', ['1','0'])->nullable();
            $table->enum('admstatus', ['1','0'])->nullable();
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
        Schema::dropIfExists('directories');
    }
}
