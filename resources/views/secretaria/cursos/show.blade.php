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
            {{ Breadcrumbs::render('ver-curso', $curso) }}
        </div>
    </div>
    <hr>
@stop

@section('content')
    <div class="container-fluid">
        <table class="table table-bordered bg-gradient-light elevation-1">
            <thead>
                <th>DNI</th>
                <th>nombre y apellido</th>
                <th>Edad</th>
            </thead>
            <tbody>
                @foreach ($curso->estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->dni }}</td>
                        <td>{{ $estudiante->nombres }} {{ $estudiante->apellidos }}</td>
                        <td>{{ Carbon\Carbon::parse($estudiante->fecha_nacimiento)->diff(Carbon\Carbon::now())->y }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('footer')
    <strong>CoreOn Software Develompent <a href="www.google.com" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
