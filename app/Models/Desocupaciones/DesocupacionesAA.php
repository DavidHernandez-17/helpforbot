<?php

namespace App\Models\Desocupaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesocupacionesAA extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_inmueble',
        'arrendatario',
        'email',
        'notificacion_entrega',
        'fecha_asignacion_cita',
        'fecha_entrega_inmueble',
        'concepto_notificacion',
        'concepto_notificacion_estandar',
        'funcionario_recibe',
        'destino_final_acta_entrega',
        'destino_llaves',
        'anticipo_servicios_publicos',
        'numero_contrato_epm',
        'ciclo_epm',
        'pendiente_pago_anticipo',
        'pp_recibio',
        'observacion_pp',
    ];
}
