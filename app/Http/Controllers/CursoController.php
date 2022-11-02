<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::withCount('estudiantes')->get();
        return view('cursos.index', compact('cursos'));
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', ['curso' => $curso]);
    }

    public function create()
    {
        return view('cursos.create');
    }
}
