<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Curso $curso)
    {
        return view('secretaria.cursos.show', ['curso' => $curso]);
    }

    public function create()
    {
        return view('secretaria.cursos.create');
    }
}
