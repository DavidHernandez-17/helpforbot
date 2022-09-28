<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvisionPersonal_GH extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'nombreEmpleado',
        'centroCostos',
        'oficio',
        'cargo',
        'ingreso',
        'retiro',
        'consecutivo',
    ];
}
