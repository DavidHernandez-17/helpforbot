<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoEmpleados_GH extends Model
{
    use HasFactory;

    protected $fillable = ['cedula', 'nombreEmpleado', 'isActive'];
}
