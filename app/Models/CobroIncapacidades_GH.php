<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CobroIncapacidades_GH extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'cedula', 'nombre', 'tipoIncapacidad', 'pago', 'quienAsume', 'horas', 'dias', 'valor'];
}
