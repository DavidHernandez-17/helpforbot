<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolidadoFNovedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidado_f_novedades', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('fechaPQRS')->nullable();
            $table->string('mesPQR')->nullable();
            $table->string('añoPQR')->nullable();
            $table->string('nPQR')->nullable();
            $table->string('idInmueble')->nullable();
            $table->string('tipoPQR')->nullable();
            $table->string('estadoPQR')->nullable();
            $table->string('aceptada')->nullable();
            $table->string('penalidad_indemnizacion')->nullable();
            $table->string('valorPenalizacion')->nullable();
            $table->string('motivoEntrega')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('fechaCierre')->nullable();
            $table->string('tiempoGestion')->nullable();
            $table->string('promedio')->nullable();
            $table->string('festivos')->nullable();
            $table->string('segmento')->nullable();
            $table->string('estadoDesocupacion')->nullable();
            $table->string('quienPagoComision')->nullable();
            $table->string('valorComisionPagada')->nullable();
            $table->string('fechaDesocupacion')->nullable();
            $table->string('comision')->nullable();
            $table->string('fechaInicioContrato')->nullable();
            $table->string('fechaFinContrato')->nullable();
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
        Schema::dropIfExists('consolidado_f_novedades');
    }
}
