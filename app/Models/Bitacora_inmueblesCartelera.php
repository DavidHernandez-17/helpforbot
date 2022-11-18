<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora_inmueblesCartelera extends Model
{
    use HasFactory;

    protected $fillable = [
        'PropertyId',
        'Title',
        'IsForRent',
        'Price',
        'BathRooms',
        'Rooms',
        'CoveredArea',
        'PlotArea',
        'Parking',
        'Latitude',
        'Longitude',
        'Estrate',
        'PublicationDate',
        'UpdateDate',
        'PropertyType',
        'Zone',
        'City',
        'Neighborhood'
    ];

}
