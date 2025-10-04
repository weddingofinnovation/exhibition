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
            
            // ✅ Important: use the exact table name + unsignedBigInteger
            $table->unsignedBigInteger('floorplan_id');

            $table->string('name');
            $table->json('coordinates');
            $table->integer('capacity')->nullable();
            $table->json('amenities')->nullable();
            $table->decimal('pricing', 10, 2)->nullable();
            $table->timestamps();

            // ✅ Correct foreign key reference
            $table->foreign('floorplan_id')
                ->references('id')
                ->on('floor_plans')
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
