@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Docentes')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>Administración de Docentes</h1>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{ Breadcrumbs::render('docentes.index') }}
        </div>
    </div>
    <hr>
@endsection

@section('content')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)
<div class="container-fluid">
    <table id="tabla-docentes" class="table table-bordered bg-gradient-light elevation-1">
        <thead>
            <th>DNI</th>
            <th>Nombre y apellido</th>
            <th>Materias/cursos</th>
        </thead>
        <tbody>
            @foreach ($docentes as $docente)
                <tr>
                    <td>{{ $docente->dni }}</td>
                    <td>{{ $docente->nombres }} {{ $docente->apellidos }}</td>
                    <td>
                        <ul>
                            @foreach ($docente->materias as $materia)
                                <li>
                                    ({{ $materia->codigo_junta }})
                                    {{ $materia->nombre_materia }}
                                    <ul>
                                        @foreach ($docente->cursos as $curso)
                                            <li><a href="{{ route('cursos.show', ['curso' => $curso]) }}">
                                                    {{ $curso->nombre_curso }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br>
<br>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/datatables-spanish.js') }}" defer></script>
    <script>
        $(document).ready(function() {
            $('#tabla-docentes').DataTable({});
        });
    </script>
@endsection

@section('footer')
    <strong>CoreOn Software Develompent <a href="www.google.com" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
