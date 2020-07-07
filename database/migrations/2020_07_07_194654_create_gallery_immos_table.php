<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryImmosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_immos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('immobilier_id');
            $table->string('first_img');
            $table->string('sec_img');
            $table->string('third_img');
            $table->string('fourth_img');
            $table->timestamps();

            $table->foreign('immobilier_id')->references('id')->on('immobiliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_immos');
    }
}
