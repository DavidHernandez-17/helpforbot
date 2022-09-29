<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeleccionGHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seleccion__g_h_s', function (Blueprint $table) {
            $table->string('id');
            $table->string('fechaSolicitud')->nullable();
            $table->string('fechaInicioBusqueda')->nullable();
            $table->string('tipoConvocatoria')->nullable();
            $table->string('vacante')->nullable();
            $table->string('proceso')->nullable();
            $table->string('comercialAdministrativo')->nullable();
            $table->string('nivelAcademico')->nullable();
            $table->string('fechaEnvioHvPrimerFiltro')->nullable();
            $table->string('fechaRespuestaCitacion')->nullable();
            $table->string('respuestaLiderPrimerFiltro')->nullable();
            $table->string('respuestaPsicologa')->nullable();
            $table->string('fechaAprobacion')->nullable();
            $table->string('fechaContratacion')->nullable();
            $table->string('PlataformaVacante')->nullable();
            $table->string('estado')->nullable();
            $table->string('requisicion')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('seleccion__g_h_s');
    }
}
