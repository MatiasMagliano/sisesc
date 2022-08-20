<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    public static $baseURL = 'https://apis.datos.gob.ar/georef/api/localidades';
}
