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
                                <a href="{{ route('cursos.show', ['curso' => $curso]) }}"
                                    class="text-info">Ver curso</a>
                            </li>
                            @can('menu-secretario')
                                <li>
                                    <a href="#" class="text-info">Modificar curso</a>
                                </li>
                                <li>
                                    <a href="#" class="text-info">Eliminar curso</a>
                                </li>
                            @endcan
                        </ul>
                        <h5>Operaciones con estudiantes</h5>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-info">Agregar estudiantes</a>
                            </li>
                            @can('menu-secretario')
                                <li>
                                    <a href="#" class="text-info">Modificar estudiantes</a>
                                </li>
                                <li>
                                    <a href="#" class="text-info">Eliminar estudiantes</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
