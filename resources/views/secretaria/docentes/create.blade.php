@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Crear docentes')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>Crear docente</h1>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{ Breadcrumbs::render('docentes') }}
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
