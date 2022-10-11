<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Docente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'docentes';

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

    public function materias()
    {
        return $this->belongsToMany(
            Materia::class,
            PlantaDocente::class,
            'docente_id',
            'materia_id'
        );
    }

    public function cursos()
    {
        return $this->belongsToMany(
            Curso::class,
            CursoMateria::class,
            'docente_id',
            'curso_id'
        );
    }

    // relación polimórfica hacia contacto
    public function contacto()
    {
        return $this->morphOne(Contacto::class, 'contactable');
    }
}
