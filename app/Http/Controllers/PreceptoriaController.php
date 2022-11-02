<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreceptoriaController extends Controller
{
    public function index()
    {
        //
        return "HOLA!";
    }

    public function tomarAsistencia()
    {
        return view('proceptoria.asistencia');
    }
}
