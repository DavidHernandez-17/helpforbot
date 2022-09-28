<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitaciones_GH extends Model
{
    use HasFactory;

    //Estructura de datos para capacitaciones Gestión humana

    protected $fillable = [
        'id',
        'fecha',
        'año',
        'categoria',
        'cantidadCapacitaciones',
        'temaCapacitacion',
        'areas',
        'capacitador',
        'tipo',
        'tiempo',
        'cantidadPersonas',
        'valorEmpresa',
        'valorEmpleado',
        'observaciones'
    ];
}
