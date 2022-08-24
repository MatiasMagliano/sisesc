@extends('adminlte::page')

@section('css')
@endsection

@section('title', 'Administración de cursos')

@section('content_header')
    <div class="navbar-header">
        <h1>Administración de cursos</h1>
        <hr>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="container-fluid">
                <div class="accordion" id="acordionMenu">
                    @foreach ($cursos as $curso)
                        <div class="card">
                            <div class="card-header bg-gradient-success" id="heading-{{ $curso->id }}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                        data-toggle="collapse" data-target="#collapse-{{ $curso->id }}"
                                        aria-expanded="false" aria-controls="collapse-{{ $curso->id }}">
                                        <h5 style="color: white; font-weight:600;">{{ $curso->nombre_curso }}</h5>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-{{ $curso->id }}" class="collapse {{ $loop->first ? 'show' : '' }}"
                                aria-labelledby="heading-{{ $curso->id }}" data-parent="#acordionMenu">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{route('secretaria.cursos.show', ['curso' => $curso])}}" class="text-info">Ver curso</a>
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
        </div>
    </div>
@stop

@section('footer')
    <strong>SisESC - CoreOn Software Develompent <a href="#" target="_blank">www.coreon.com.ar</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>v</b>:1.0 (Laravel: {{ App::VERSION() }}, PHP: {{ phpversion() }})
    </div>
@endsection
