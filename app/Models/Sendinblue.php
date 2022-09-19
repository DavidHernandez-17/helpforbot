<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sendinblue extends Model
{
    use HasFactory;

    protected $fillable = ['st_text', 'ts', 'sub', 'frm', 'email', 'tag', 'mid'];
}
