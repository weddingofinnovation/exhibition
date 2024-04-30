<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndustryToLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('industry')->nullable();
            $table->string('company')->nullable();
            $table->string('designation')->nullable();
            $table->enum('terms', ['1','0'])->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('industry')->nullable();
            $table->string('company')->nullable();
            $table->string('designation')->nullable();
            $table->enum('terms', ['1','0'])->nullable();
        });
    }
}
