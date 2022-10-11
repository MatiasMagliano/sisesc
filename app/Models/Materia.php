<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materia extends Model
{
    use SoftDeletes;

    protected $table = 'materias';

    protected $fillable = [
        'codigo_junta',
        'nombre_mteria'
    ];

    public function cursos()
    {
        return $this->belongsToMany(
            Curso::class,
            CursoMateria::class,
            'materia_id',
            'curso_id'
        );
    }

    public function docentes()
    {
        return $this->belongsToMany(
            Docente::class,
            PlantaDocente::class,
            'materia_id',
            'docente_id'
        );
    }
}
