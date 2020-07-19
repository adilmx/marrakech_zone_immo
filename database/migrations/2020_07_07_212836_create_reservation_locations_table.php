<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer');
            $table->foreignId('id_immo_loc');
            $table->integer('nbr_personnes');
            $table->date('date_debut_reservation');
            $table->time('time_debut_reservation');
            $table->date('date_fin_reservation');
            $table->time('time_fin_reservation');

            $table->foreign('id_customer')->references('id')->on('customers');
            $table->foreign('id_immo_loc')->references('id')->on('immobilier_locations');

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
        Schema::dropIfExists('reservation_locations');
    }
}
