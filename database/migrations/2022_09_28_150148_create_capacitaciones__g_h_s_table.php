<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacitacionesGHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitaciones__g_h_s', function (Blueprint $table) {
            $table->string('id');
            $table->string('fecha');
            $table->string('año');
            $table->string('categoria');
            $table->string('cantidadCapacitaciones');
            $table->string('temaCapacitacion');
            $table->string('areas');
            $table->string('capacitador');
            $table->string('tipo');
            $table->string('tiempo');
            $table->string('cantidadPersonas');
            $table->string('valorEmpresa');
            $table->string('valorEmpleado');
            $table->string('observaciones');
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
        Schema::dropIfExists('capacitaciones__g_h_s');
    }
}
