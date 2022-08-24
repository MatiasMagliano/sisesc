<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();

        return view('secretaria.cursos.index', compact('cursos'));
    }

    public function show(Curso $curso)
    {
        return view('secretaria.cursos.show', compact('curso'));
    }
}
