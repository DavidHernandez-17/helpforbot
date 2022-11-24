<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesocupacionesAASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desocupaciones_a_a_s', function (Blueprint $table) {
            $table->string('id');
            $table->string('id_inmueble');
            $table->string('arrendatario');
            $table->string('email');
            $table->string('notificacion_entrega');
            $table->string('fecha_asignacion_cita');
            $table->string('fecha_entrega_inmueble');
            $table->string('concepto_notificacion');
            $table->string('concepto_notificacion_estandar');
            $table->string('funcionario_recibe');
            $table->string('destino_final_acta_entrega');
            $table->string('destino_llaves');
            $table->string('anticipo_servicios_publicos');
            $table->string('numero_contrato_epm');
            $table->string('ciclo_epm');
            $table->string('pendiente_pago_anticipo');
            $table->string('pp_recibio');
            $table->string('observacion_pp');
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
        Schema::dropIfExists('desocupaciones_a_a_s');
    }
}
