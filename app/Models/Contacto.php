<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto_persona';

    protected $fillable = [
        'direccion',
        'telefono',
        'correo_e',
        'provincia_id',
        'localidad_id',
    ];

    public function contactable()
    {
        return $this->morphTo();
    }
}
