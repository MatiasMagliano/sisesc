@extends('adminlte::page')

@section('css')
    <style>
        @media (min-width: 1200px) {
            .row>.col-lg-3:nth-child(3n+1) {
                clear: left;
            }
        }

        @media (max-width: 768px) {
            .row>.col-sm-4:nth-child(2n+1) {
                clear: left;
            }
        }
    </style>
@endsection

@section('title', 'Secretaría')

@section('content_header')
    <div class="navbar-header row">
        <div class="col-md-8">
            <h1>Secretaría</h1><br>
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
            {{ Breadcrumbs::render('secretaria') }}
        </div>
    </div>
    <hr>
@endsection

@section('content')
    <div class="content ml-3 mr-3">
        <x-adminlte-card title="Herramientas" header-class="text-uppercase text-bold" collapsible>
            <div class="row">
                <div class="col-md-2">
                    <div class="small-box">
                        <div class="inner">
                            <h4>Estudiantes</h4>
                            <a href="#" class="text-info">Crear estudiante</a><br>
                            <a href="#" class="text-info">Editar estudiante</a><br>
                            <a href="#" class="text-info">Borrar estudiante</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="small-box">
                        <div class="inner">
                            <h4>Cursos</h4>
                            <a href="{{ route('secretaria.cursos.create') }}" class="text-info">Crear curso</a><br>
                            <a href="#" class="text-info">Editar cursos</a><br>
                            <a href="#" class="text-info">Borrar cursos</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="small-box">
                        <div class="inner">
                            <a href="{{route('secretaria.docentes.index')}}" class="text-reset"><h4><u>Docentes</u></h4></a>
                            <a href="#" class="text-info">Crear docente</a><br>
                            <a href="#" class="text-info">Editar docente</a><br>
                            <a href="#" class="text-info">Asignar docente</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="small-box">
                        <div class="inner">
                            <h4>Personal</h4>
                            <a href="#" class="text-info">Crear personal</a><br>
                            <a href="#" class="text-info">Editar personal</a><br>
                            <a href="#" class="text-info">Borrar personal</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="small-box">
                        <div class="inner">
                            <h4>Egresados</h4>
                            <a href="#" class="text-info">Crear egresados</a><br>
                            <a href="#" class="text-info">Editar egresados</a><br>
                            <a href="#" class="text-info">Imprimir egresados</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="small-box">
                        <div class="inner">
                            <h4>Sin asignar</h4>
                            <a href="#" class="text-info">Crear egresados</a><br>
                            <a href="#" class="text-info">Editar egresados</a><br>
                            <a href="#" class="text-info">Imprimir egresados</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </div>
            </div>
        </x-adminlte-card>

        <hr>
        {{-- LISTADO DE TODOS LOS CURSOS CON SUS LINKS --}}
        <div>
            <div class="row">
                @foreach ($cursos as $curso)
                    <div class="col-sm-4 col-lg-3">
                        <div class="list-group mb-3">
                            <div class="list-group-item flex-column align-items-start bg-gradient-teal">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $curso->nombre_curso }}</h5>
                                    <small>{{$curso->estudiantes->count()}} estudiantes</small>
                                </div>
                            </div>
                            <div class="list-group-item flex-column align-items-start">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{ route('secretaria.cursos.show', ['curso' => $curso]) }}"
                                            class="text-info">Ver curso</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-info">Modificar curso</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-info">Eliminar curso</a>
                                    </li>
                                </ul>
                                <h5>Operaciones con estudiantes</h5>
                                <hr>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="text-info">Agregar estudiantes</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-info">Modificar estudiantes</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-info">Eliminar estudiantes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection

@section('js')
@endsection

@section('footer')
    <strong>SisESC - CoreOn Software Develompent <a href="#" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
