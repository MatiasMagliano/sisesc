@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Crear curso')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>Administración de cursos | Crear curso</h1>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{ Breadcrumbs::render('crear-curso') }}
        </div>
    </div>
    <hr>
@endsection

@section('content')
@section('js')
@endsection

@section('footer')
    <strong>SisESC - CoreOn Software Develompent <a href="#" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
