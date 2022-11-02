@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Expediente de estudiante')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>Expediente de <span class="uppercase">{{$estudiante->apellidos}}</span>, {{$estudiante->nombres}}</h1><br>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{ Breadcrumbs::render('secretaria.estudiantes.show', $estudiante) }}
        </div>
    </div>
    <hr>
@endsection

@section('content')
    <div class="container-fluid">
        <ul class="nav nav-tabs nav-fill" id="pestaniaEstudiante" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="estudiantes-tab" data-toggle="tab" href="#estudiantes" role="tab"
                    aria-controls="estudiantes" aria-selected="true">
                    <span class="text-info">Información general</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="docentes-tab" data-toggle="tab" href="#docentes" role="tab"
                    aria-controls="docentes" aria-selected="false">
                    <span class="text-info">Información de contacto</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="docentes-tab" data-toggle="tab" href="#docentes" role="tab"
                    aria-controls="docentes" aria-selected="false">
                    <span class="text-info">Información médica</span>
                </a>
            </li>
        </ul>
        <div class="tab-content bg-white border-left border-bottom border-right" id="pestaniaCursoContent">

            {{-- INFO GENERAL --}}
            <div class="tab-pane fade show active" id="estudiantes" role="tabpanel" aria-labelledby="estudiantes-tab">
                <table class=" justify-between">
                    <tbody>
                        <tr>
                            <td>IMAGEN</td>
                            <td>DATOS BASICOS</td>
                            <td>OTRO</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- INFO CONTACTO --}}
            <div class="tab-pane fade" id="docentes" role="tabpanel" aria-labelledby="docentes-tab">

            </div>

            {{-- INFO MEDICA --}}
            <div class="tab-pane fade" id="docentes" role="tabpanel" aria-labelledby="docentes-tab">

            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection

@section('footer')
    <strong>CoreOn Software Develompent <a href="www.google.com" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
