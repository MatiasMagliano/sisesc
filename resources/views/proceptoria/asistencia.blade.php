@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Tomar asistencia')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>Tomar asistencia</h1><br>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{ Breadcrumbs::render('preceptoria.asistencia') }}
        </div>
    </div>
    <hr>
@endsection

@section('content')
@endsection

@section('js')
@endsection

@section('footer')
    <strong>CoreOn Software Develompent <a href="www.google.com" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
