<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;

    protected $table = 'cursos';

    protected $fillable = [
        'codigo_curso',
        'nombre_curso',
    ];

    public function estudiantes(): BelongsToMany
    {
        return $this->belongsToMany(
            Estudiante::class,
            Matricula::class,
            'curso_id',
            'estudiante_id'
        );
    }

    public function materias()
    {
        return $this->belongsToMany(
            Materia::class,
            CursoMateria::class,
            'curso_id',
            'materia_id'
        );
    }

    public function docentes()
    {
        return $this->belongsToMany(
            Docente::class,
            CursoMateria::class,
            'curso_id',
            'docente_id'
        );
    }
}
