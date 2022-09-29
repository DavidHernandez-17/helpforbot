<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seleccion_GH extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'fechaSolicitud',
        'fechaInicioBusqueda',
        'tipoConvocatoria',
        'vacante',
        'proceso',
        'comercialAdministrativo',
        'nivelAcademico',
        'fechaEnvioHvPrimerFiltro',
        'fechaRespuestaCitacion',
        'respuestaLiderPrimerFiltro',
        'respuestaPsicologa',
        'fechaAprobacion',
        'fechaContratacion',
        'PlataformaVacante',
        'estado',
        'requisicion',
        'observaciones',
    ];

}
