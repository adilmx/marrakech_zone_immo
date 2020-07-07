<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_ventes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer');
            $table->foreignId('id_immo_ventes');
              
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->foreign('id_immo_ventes ')->references('id')->on('immobilier_ventes');

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
        Schema::dropIfExists('reservation_ventes');
    }
}
