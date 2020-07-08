<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etat_id');
            $table->foreignId('marque_id');
            $table->string('numm_immatric');
            $table->date('date_mise_service');
            $table->double('kilometrage');
            $table->integer('nbr_place');
            $table->double('prix_min_per_day');
            $table->double('prix_max_per_day');
            $table->string('couleur');
            $table->double('charge_max');
            $table->string('deleted');

            $table->string('pic_src');
            $table->timestamps();

            $table->foreign('etat_id')->references('id')->on('etats');
            $table->foreign('marque_id')->references('id')->on('marques');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
