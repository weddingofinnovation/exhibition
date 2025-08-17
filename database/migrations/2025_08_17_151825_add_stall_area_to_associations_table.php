<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStallAreaToAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('associations', function (Blueprint $table) {
            $table->unsignedBigInteger('reference_id')->nullable()->after('id');

           // self referencing foreign key
           $table->foreign('reference_id')->references('id')->on('associations')->onDelete('cascade');
           $table->integer('stall_area')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('associations', function (Blueprint $table) {
           $table->dropForeign(['reference_id']);
           $table->dropColumn('reference_id');
           $table->integer('stall_area')->nullable(); 
        });
    }
}
