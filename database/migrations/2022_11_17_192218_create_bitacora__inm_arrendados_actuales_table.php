<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacoraInmArrendadosActualesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora__inm_arrendados_actuales', function (Blueprint $table) {
            $table->id();
            $table->string('Inmueble');
            $table->string('Direccion');
            $table->string('Amparo_Integral');
            $table->string('Aseguradora');
            $table->double('Vr_Canon');
            $table->double('Vr_Admon');
            $table->string('Fecha_Inicio');
            $table->string('Fecha_Fin');
            $table->string('Destinacion');
            $table->string('Ced_Arrend');
            $table->string('Arrendatario');
            $table->string('Email_Arrend');
            $table->string('Ced_Prop');
            $table->string('Propietario');
            $table->string('Ciudad');
            $table->string('Email_Prop');
            $table->double('Porce_Comision');
            $table->integer('TipoPago')->nullable();
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
        Schema::dropIfExists('bitacora__inm_arrendados_actuales');
    }
}
