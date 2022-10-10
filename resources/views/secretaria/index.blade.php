@extends('adminlte::page')

@section('css')
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
                <div class="col-sm-3">
                    <div class="small-box">
                        <div class="inner">
                            <h3>Cursos</h3>
                            <a href="{{route('secretaria.cursos.create')}}" class="text-info">Agregar curso</a><br>
                            <a href="#" class="text-info">Editar cursos</a><br>
                            <a href="#" class="text-info">Borrar cursos</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="small-box">
                        <div class="inner">
                            <h3>Docentes</h3>
                            <a href="#" class="text-info">Agregar docente</a><br>
                            <a href="#" class="text-info">Editar docente</a><br>
                            <a href="#" class="text-info">Borrar docente</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="small-box">
                        <div class="inner">
                            <h3>Personal</h3>
                            <a href="#" class="text-info">Crear personal</a><br>
                            <a href="#" class="text-info">Editar personal</a><br>
                            <a href="#" class="text-info">Borrar personal</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="small-box">
                        <div class="inner">
                            <h3>Egresados</h3>
                            <a href="#" class="text-info">Crear egresados</a><br>
                            <a href="#" class="text-info">Editar egresados</a><br>
                            <a href="#" class="text-info">Imprimir egresados</a>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                    </div>
                </div>
            </div>
        </x-adminlte-card>

        <hr>

        <div class="accordion" id="acordionMenu">
            @foreach ($cursos as $curso)
                <div class="card">
                    <div class="card-header bg-gradient-success" id="heading-{{ $curso->id }}">
                        <h2 class="mb-0">
                            <button class="btn btn-link {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                data-toggle="collapse" data-target="#collapse-{{ $curso->id }}" aria-expanded="false"
                                aria-controls="collapse-{{ $curso->id }}">
                                <h5 style="color: white; font-weight:600;">{{ $curso->nombre_curso }}</h5>
                            </button>
                        </h2>
                    </div>

                    <div id="collapse-{{ $curso->id }}" class="collapse {{ $loop->first ? 'show' : '' }}"
                        aria-labelledby="heading-{{ $curso->id }}" data-parent="#acordionMenu">
                        <div class="card-body">
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
                            <br>
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
@endsection

@section('js')
@endsection

@section('footer')
    <strong>SisESC - CoreOn Software Develompent <a href="#" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
