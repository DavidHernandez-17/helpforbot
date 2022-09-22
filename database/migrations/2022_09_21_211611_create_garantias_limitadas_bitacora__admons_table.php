<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarantiasLimitadasBitacoraAdmonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garantias_limitadas_bitacora__admons', function (Blueprint $table) {
            $table->string('id');
            $table->string('idInmueble');
            $table->string('novedades');
            $table->string('fechaNovedad');
            $table->string('destinacion');
            $table->string('limite');
            $table->string('cartera');
            $table->string('mesesSiniestrados');
            $table->string('fechaInicialSiniestro');
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
        Schema::dropIfExists('garantias_limitadas_bitacora__admons');
    }
}
