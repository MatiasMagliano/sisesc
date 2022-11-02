@extends('adminlte::page')

@section('css')
    <style>
        .mobile {
            display: none
        }

        .desktop {
            display: inline
        }

        @media (max-width: 600px) {
            .desktop {
                display: none
            }

            .mobile {
                display: inline
            }
        }
    </style>
@endsection

@section('title', 'Usuarios')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>Perfil de usuario</h1>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{-- {{ Breadcrumbs::render('estudiantes.show', $estudiante) }} --}}
        </div>
    </div>
    <hr>
@stop

@section('content')
    {{-- TABLA PARA ESCRITORIOS --}}
    <div class="wrapper desktop">
        @include('admin.usuarios.partials.tabla-desktop')
        <br>
        <div class="d-flex justify-content-end"> {{-- AGREGA LINKS DE PAGINACIÓN para desktop --}}
            <div class="pagination">
                {{ $usuarios->links() }}
            </div>
        </div>
    </div>

    {{-- TABLA PARA CELULARES --}}
    <div class="wrapper mobile">
        @include('admin.usuarios.partials.tabla-mobile')
        <br>
        <div class="d-flex justify-content-end"> {{-- AGREGA LINKS DE PAGINACIÓN para mobile --}}
            <div class="pagination-sm">
                {{ $usuarios->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@stop

@section('footer')
    <strong>CoreOn Software Develompent <a href="www.google.com" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
