<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarantiasLimitadas_Admon extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'mesInforme',
        'aseguradora',
        'solicitud',
        'arrendatario',
        'canon',
        'destinacion',
        'limite',
        'deudor',
        'polizaHogar',
        'polizaIntegral',
        'cartera',
        'mesesSiniestrados',
        'fechaInicialSiniestro',
        'fechaAprobacion',
        'mes',
        'año',
        'condicionFirmada',
        'simiEntroNegocio',
        'comentarios'
    ];
}
