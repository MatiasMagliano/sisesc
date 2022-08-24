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
        'estudiante_id',
        'docente_id',
        'materia_id',
        'codigo_curso',
        'nombre_curso',
    ];

    public function estudiantes(): BelongsToMany
    {
        return $this->belongsToMany(
            Estudiante::class,
            'matriculas',
            'curso_id',
            'estudiante_id'
        );
    }
}
