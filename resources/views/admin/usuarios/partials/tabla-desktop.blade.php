<table class="table table-bordered mt-3 bg-gradient-light elevation-1">
    <thead>
        <th>Nombre y apellido</th>
        <th>E-Mail</th>
        <th>Roles y permisos</th>
        <th>Activo desde...</th>
        <th>ACCIONES</th>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
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
                <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
                <td>
                    @can('editar usuarios')
                        <i class="fas fa-edit"></i>
                    @endcan
                    @can('borrar usuarios')
                        <i class="fas fa-trash"></i>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
