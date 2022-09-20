<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobroIncapacidadesGHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobro_incapacidades__g_h_s', function (Blueprint $table) {
            $table->string('id');
            $table->string('fecha');
            $table->string('cedula');
            $table->string('nombre');
            $table->string('tipoIncapacidad');
            $table->string('pago');
            $table->string('quienAsume');
            $table->string('horas');
            $table->string('dias');
            $table->string('valor');
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
        Schema::dropIfExists('cobro_incapacidades__g_h_s');
    }
}
