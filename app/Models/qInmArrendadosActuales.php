<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qInmArrendadosActuales extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'qInmArrendadosActuales';

    use HasFactory;
}
