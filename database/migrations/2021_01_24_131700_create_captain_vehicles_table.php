<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaptainVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('captain_vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('captain_id');
            $table->string('registration_plate')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->boolean('is_default')->default(false);
            $table->boolean('status')->default(false);
            $table->boolean('status_image')->default(false);
            $table->timestamps();

            $table->foreign('captain_id')->references('id')->on('captains')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('captain_vehicles');
    }
}
