<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobilierVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobilier_ventes', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('id_commune');
            $table->string('designation');

            $table->integer('nbr_chambre');
            $table->integer('nbr_etage');
            $table->string('patente');
            $table->string('pic_src');
            $table->double('price_max');
            $table->double('price_min');
            $table->boolean('vendue');

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
        Schema::dropIfExists('immobilier_ventes');
    }
}
