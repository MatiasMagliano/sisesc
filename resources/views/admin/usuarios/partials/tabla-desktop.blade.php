<table class="table table-bordered mt-3 bg-gradient-light elevation-1">
    <thead>
        <th>Nombre y apellido</th>
        <th>E-Mail</th>
        <th>Roles y permisos</th>
        <th>Activo desde</th>
        <th>ACCIONES</th>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td class="align-middle">
                    {{ $usuario->nombres }} {{ $usuario->apellidos }}
                </td>
                <td class="align-middle">
                    {{ $usuario->email }}
                </td>
                <td class="align-middle">
                    <ul class="list-unstyled ml-3">
                        @if (!empty($usuario->getRoleNames()))
                            @foreach ($usuario->getRoleNames() as $rol)
                                <li class="badge badge-success">{{ $rol }}</li>
                                <ul>
                                    @foreach ($usuario->getPermissionsViaRoles() as $permiso)
                                        <li class="badge badge-info">{{ $permiso->name }}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                        @else
                            <li class="badge badge-danger">SIN ROL</li>
                        @endif
                    </ul>
                </td>
                <td class="align-middle text-center">
                    {{ $usuario->created_at->format('d/m/Y') }}
                </td>
                <td class="align-middle text-center">
                    @can('editar usuarios')
                        <a href="{{ route('admin.usuarios.show', ['usuario' => $usuario]) }}" class="btn btn-outline-info"
                            data-toggle="tooltip" data-placement="bottom" title="Ver expediente">
                            <i class="fas fa-search"></i>
                        </a>
                    @endcan
                    @can('borrar usuarios')
                        <a href="#" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="bottom"
                            title="Borrar usuario">
                            <i class="fas fa-trash"></i>
                        </a>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
