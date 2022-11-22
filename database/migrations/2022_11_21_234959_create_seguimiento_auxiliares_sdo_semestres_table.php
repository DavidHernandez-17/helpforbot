<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientoAuxiliaresSdoSemestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_auxiliares_sdo_semestres', function (Blueprint $table) {
            $table->string('id');
            $table->string('id_inmueble');
            $table->string('fecha_notificacion');
            $table->string('tipo_inmueble');
            $table->string('tipo_desocupacion');
            $table->string('tipo_visita');
            $table->string('citas_caso');
            $table->string('arr_fecha_cita_1');
            $table->string('arr_fecha_cita_2');
            $table->string('arr_fecha_cita_3');
            $table->string('arr_fecha_cita_4');
            $table->string('arr_fecha_cita_5');
            $table->string('arr_fecha_cita_7');
            $table->string('auxiliar_recibe_arr');
            $table->string('pp_fecha_cita_1');
            $table->string('pp_fecha_cita_2');
            $table->string('pp_fecha_cita_3');
            $table->string('pp_fecha_cita_4');
            $table->string('pp_fecha_cita_5');
            $table->string('pp_fecha_cita_6');
            $table->string('auxiliar_entrega_pp');
            $table->string('tipo_entrega_pp');
            $table->string('estado_inmueble');
            $table->string('aviso');
            $table->string('descarga_video');
            $table->string('acta_fisica_centro_acopio');
            $table->string('acta_escaneada_zoho');
            $table->string('inventario_chepe_pepe');
            $table->string('video');
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
        Schema::dropIfExists('seguimiento_auxiliares_sdo_semestres');
    }
}
