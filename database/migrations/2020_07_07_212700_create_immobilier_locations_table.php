<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobilierLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobilier_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_commune');
            $table->string('designation');

            $table->integer('nbr_chambre');
            $table->integer('nbr_etage');
            $table->string('patente');
            $table->string('pic_src');
            $table->double('price_max_per_day');
            $table->double('price_min_per_day');
            $table->boolean('louee');

            $table->foreign('id_commune')->references('id')->on('communes');

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
        Schema::dropIfExists('immobilier_locations');
    }
}
