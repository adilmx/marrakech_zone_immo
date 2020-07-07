<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer');
            $table->foreignId('id_car');
            $table->date('date_debut_reservation');
            $table->time('time_debut_reservation');
            $table->date('date_fin_reservation');
            $table->time('time_fin_reservation');
            $table->boolean('car_driver');

            $table->foreign('id_customer')->references('id')->on('customers');
            $table->foreign('id_car')->references('id')->on('cars');

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
        Schema::dropIfExists('reservation_cars');
    }
}
