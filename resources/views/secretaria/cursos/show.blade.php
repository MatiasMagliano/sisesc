@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Curso ')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>{{ $curso->nombre_curso }}</h1>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{ Breadcrumbs::render('secretaria.cursos.show', $curso) }}
        </div>
    </div>
    <hr>
@endsection

@section('content')
    <div class="container-fluid">
        <ul class="nav nav-tabs" id="pestaniaCurso" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="estudiantes-tab" data-toggle="tab" href="#estudiantes" role="tab"
                    aria-controls="estudiantes" aria-selected="true">Estudiantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="docentes-tab" data-toggle="tab" href="#docentes" role="tab"
                    aria-controls="docentes" aria-selected="false">Docentes</a>
            </li>
        </ul>
        <div class="tab-content" id="pestaniaCursoContent">
            <div class="tab-pane fade show active" id="estudiantes" role="tabpanel" aria-labelledby="estudiantes-tab">
                <table class="table table-bordered bg-gradient-light elevation-1">
                    <thead>
                        <th>DNI</th>
                        <th>Género</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>contacto</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($curso->estudiantes as $estudiante)
                            <tr>
                                <td>{{ $estudiante->dni }}</td>
                                <td>{{ $estudiante->genero->genero }}</td>
                                <td>{{ $estudiante->nombres }} {{ $estudiante->apellidos }}</td>
                                <td>{{ Carbon\Carbon::parse($estudiante->fecha_nacimiento)->diff(Carbon\Carbon::now())->y }}
                                </td>
                                <td>{{ $estudiante->contacto->correo_e }}</td>
                                <td class="text-middle text-center">
                                    <a href="{{ route('secretaria.estudiantes.show', ['estudiante' => $estudiante]) }}"
                                        class="btn btn-outline-info" data-toggle="tooltip" data-placement="bottom" title="Ver expediente">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-outline-info" data-toggle="tooltip" data-placement="bottom" title="Imprimir expediente">
                                        <i class="fas fa-print"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="docentes" role="tabpanel" aria-labelledby="docentes-tab">
                <table class="table table-bordered bg-gradient-light elevation-1">
                    <thead>
                        <th>MATERIA</th>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Contacto</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($curso->docentes as $docente)
                            <tr>
                                <td>{{ $docente->materias[0]->nombre_materia }}</td>
                                <td>{{ $docente->dni }}</td>
                                <td>{{ $docente->nombres }} {{ $docente->apellidos }}</td>
                                <td>
                                    E-mail: {{ $docente->contacto->correo_e }} <br>
                                    Tel.: {{ $docente->contacto->telefono }}
                                </td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
@stop

@section('footer')
    <strong>CoreOn Software Develompent <a href="www.google.com" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
