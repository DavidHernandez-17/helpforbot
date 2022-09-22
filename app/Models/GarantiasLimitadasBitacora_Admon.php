<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarantiasLimitadasBitacora_Admon extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idInmueble',
        'novedades',
        'fechaNovedad',
        'destinacion',
        'limite',
        'cartera',
        'mesesSiniestrados',
        'fechaInicialSiniestro',
        'simiEntroNegocio',
        'comentarios'
    ];
}
