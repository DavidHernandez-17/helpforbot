<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacoraInmueblesCartelerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora_inmuebles_carteleras', function (Blueprint $table) {
            $table->id();
            $table->string('PropertyId');
            $table->string('Title');
            $table->boolean('IsForRent');
            $table->double('Price');
            $table->integer('BathRooms');
            $table->integer('Rooms');
            $table->integer('CoveredArea');
            $table->integer('PlotArea');
            $table->integer('Parking');
            $table->string('Latitude');
            $table->string('Longitude');
            $table->string('Estrate');
            $table->string('PublicationDate');
            $table->string('UpdateDate');
            $table->string('PropertyType');
            $table->string('Zone');
            $table->string('City');
            $table->string('Neighborhood');
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
        Schema::dropIfExists('bitacora_inmuebles_carteleras');
    }
}
