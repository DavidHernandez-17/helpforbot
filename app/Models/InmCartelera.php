<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InmCartelera extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv_cartelera';

    protected $table = 'Property';

}
