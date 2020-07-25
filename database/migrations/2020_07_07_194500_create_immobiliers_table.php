<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobiliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobiliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_commune');
            $table->foreignId('id_type');

            $table->string('designation');
            $table->string('categorie');

            $table->integer('nbr_chambre');
            $table->integer('nbr_etage');
            $table->string('patente');
             $table->double('price_max');
            $table->double('price_min');
            $table->string('deleted');
            $table->string('pic_src');

            $table->foreign('id_commune')->references('id')->on('communes');
            $table->foreign('id_type')->references('id')->on('type_immobiliers');

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
        Schema::dropIfExists('immobiliers');
    }
}
