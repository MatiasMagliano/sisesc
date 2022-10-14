<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Estudiante $estudiante)
    {
        return view('secretaria.estudiantes.show', ['estudiante' => $estudiante]);
    }
}
