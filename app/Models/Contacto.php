<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto_persona';

    protected $fillable = [
        'user_id',
        'direccion',
        'telefono',
        'correo_e',
        'provincia_id',
        'localidad_id',
    ];
}
