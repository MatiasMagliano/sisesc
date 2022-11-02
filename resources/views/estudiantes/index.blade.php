@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Estudiantes')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>Estudiantes</h1><br>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{ Breadcrumbs::render('estudiantes.index') }}
        </div>
    </div>
    <hr>
@endsection

@section('content')
    @section('plugins.Datatables', true)
    @section('plugins.DatatablesPlugins', true)
    <div class="container-fluid">
        <table id="tabla-estudiantes" class="table table-bordered bg-gradient-light elevation-1">
            <thead>
                <th></th>
                <th>DNI</th>
                <th>Nombre y apellido</th>
                <th>Género</th>
                <th>Edad</th>
                <th>contacto</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td class="text-center align-middle">{{$loop->iteration}}</td>
                        <td class="text-center align-middle">{{ $estudiante->dni }}</td>
                        <td class="align-middle">{{ $estudiante->nombres }} {{ $estudiante->apellidos }}</td>
                        <td class="align-middle">{{ $estudiante->genero->genero }}</td>
                        <td class="text-center align-middle">
                            {{ Carbon\Carbon::parse($estudiante->fecha_nacimiento)->diff(Carbon\Carbon::now())->y }}
                        </td>
                        <td class="align-middle">
                            Tel: {{ $estudiante->contacto->telefono }} <br>
                            E-mail: {{ $estudiante->contacto->correo_e }}
                        </td>
                        <td class="text-middle text-center">
                            <a href="{{ route('estudiantes.show', ['estudiante' => $estudiante]) }}"
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
    <br>
    <br>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/datatables-spanish.js') }}" defer></script>
    <script>
            $(document).ready(function() {
                $('#tabla-estudiantes').DataTable({});
            });
    </script>
@endsection

@section('footer')
    <strong>CoreOn Software Develompent <a href="www.google.com" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
