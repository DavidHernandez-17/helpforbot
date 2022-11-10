<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegociosCerradosCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios_cerrados__centros', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('rangoFecha')->nullable();
            $table->string('fecha2')->nullable();
            $table->string('fechaLegalizacion')->nullable();
            $table->string('mes')->nullable();
            $table->string('año2')->nullable();
            $table->string('año')->nullable();
            $table->string('metaMensual')->nullable();
            $table->string('metaAsesor6')->nullable();
            $table->string('metaAsesor9')->nullable();
            $table->string('metaAsesor12')->nullable();
            $table->string('cod')->nullable();
            $table->string('referencia')->nullable();
            $table->string('direccion')->nullable();
            $table->string('inmueble')->nullable();
            $table->string('propietario')->nullable();
            $table->string('arrendatario')->nullable();
            $table->string('canon')->nullable();
            $table->string('asesor')->nullable();
            $table->string('captador')->nullable();
            $table->string('promotor')->nullable();
            $table->string('medioArr')->nullable();
            $table->string('tipo')->nullable();
            $table->string('aseguradora')->nullable();
            $table->string('mandato')->nullable();
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
        Schema::dropIfExists('negocios_cerrados__centros');
    }
}
