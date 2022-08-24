<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Padre extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'dni',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'genero'
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];

    // relación polimórfica hacia contacto
    public function contacto()
    {
        return $this->morphOne(Contacto::class, 'contactable');
    }
}
