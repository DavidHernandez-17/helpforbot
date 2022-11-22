<?php

namespace App\Models\Desocupaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeguimientoAuxiliaresSdoSemestre extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_inmueble',
        'fecha_notificacion',
        'tipo_inmueble',
        'tipo_desocupacion',
        'tipo_visita',
        'citas_caso',
        'arr_fecha_cita_1',
        'arr_fecha_cita_2',
        'arr_fecha_cita_3',
        'arr_fecha_cita_4',
        'arr_fecha_cita_5',
        'arr_fecha_cita_7',
        'auxiliar_recibe_arr',
        'pp_fecha_cita_1',
        'pp_fecha_cita_2',
        'pp_fecha_cita_3',
        'pp_fecha_cita_4',
        'pp_fecha_cita_5',
        'pp_fecha_cita_6',
        'auxiliar_entrega_pp',
        'tipo_entrega_pp',
        'estado_inmueble',
        'aviso',
        'descarga_video',
        'acta_fisica_centro_acopio',
        'acta_escaneada_zoho',
        'inventario_chepe_pepe',
        'video',
        'observaciones',
    ];
}
