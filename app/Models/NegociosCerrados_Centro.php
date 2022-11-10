<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NegociosCerrados_Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'rangoFecha',
        'fecha2',
        'fechaLegalizacion',
        'mes',
        'año2',
        'año',
        'metaMensual',
        'metaAsesor6%',
        'metaAsesor9%',
        'metaAsesor12%',
        'cod',
        'referencia',
        'direccion',
        'inmueble',
        'propietario',
        'arrendatario',
        'canon',
        'asesor',
        'captador',
        'promotor',
        'medioArr',
        'tipo',
        'aseguradora',
        'mandato'
    ];

}
