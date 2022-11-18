<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacora_InmArrendadosActuales extends Model
{
    use HasFactory;

    protected $fillable = [
        'Inmueble',
        'Direccion',
        'Amparo_Integral',
        'Aseguradora',
        'Vr_Canon',
        'Vr_Admon',
        'Fecha_Inicio',
        'Fecha_Fin',
        'Destinacion',
        'Ced_Arrend',
        'Arrendatario',
        'Email_Arrend',
        'Ced_Prop',
        'Propietario',
        'Ciudad',
        'Email_Prop',
        'Porce_Comision',
        'TipoPago'
    ];
}
