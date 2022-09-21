<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarantiasLimitadasAdmonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garantias_limitadas__admons', function (Blueprint $table) {
            $table->string('id');
            $table->string('mesInforme');
            $table->string('aseguradora');
            $table->string('solicitud');
            $table->string('arrendatario');
            $table->string('canon');
            $table->string('destinacion');
            $table->string('limite');
            $table->string('deudor');
            $table->string('polizaHogar');
            $table->string('polizaIntegral');
            $table->string('cartera');
            $table->string('mesesSiniestrados');
            $table->string('fechaInicialSiniestro');
            $table->string('fechaAprobacion');
            $table->string('mes');
            $table->string('año');
            $table->string('condicionFirmada');
            $table->string('simiEntroNegocio');
            $table->string('comentarios');
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
        Schema::dropIfExists('garantias_limitadas__admons');
    }
}
