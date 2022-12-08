<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends User
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

    public function curso()
    {
        return $this->belongsTo(
            Matricula::class,
            'estudiante_id',
            'curso_id'
        );
    }

    public function genero()
    {
        return $this->belongsTo(
            Genero::class
        );
    }

    // relación polimórfica hacia contacto
    public function contacto()
    {
        return $this->hasOne(Contacto::class, 'user_id');
    }
}
