<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsolidadoF_novedades extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'fechaPQRS',
        'mesPQR',
        'añoPQR',
        'nPQR',
        'idInmueble',
        'tipoPQR',
        'estadoPQR',
        'aceptada',
        'penalidad_indemnizacion',
        'valorPenalizacion',
        'motivoEntrega',
        'observaciones',
        'fechaCierre',
        'tiempoGestion',
        'promedio',
        'festivos',
        'segmento',
        'estadoDesocupacion',
        'quienPagoComision',
        'valorComisionPagada',
        'fechaDesocupacion',
        'comision',
        'fechaInicioContrato',
        'fechaFinContrato'
    ];
}
