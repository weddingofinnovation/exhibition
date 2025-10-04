<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->id();
           
           

            $table->string('name');
            $table->json('coordinates');
            $table->integer('capacity')->nullable();
            $table->json('amenities')->nullable();
            $table->decimal('pricing', 10, 2)->nullable();
            $table->timestamps();
            // ✅ Foreign key column must match target column type
            $table->unsignedBigInteger('floorplan_id');
            // ✅ Correct foreign key name & table name
            $table->foreign('floorplan_id')
                ->references('id')
                ->on('floorplans')
                ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spaces');
    }
}
