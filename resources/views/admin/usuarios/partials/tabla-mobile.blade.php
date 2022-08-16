<table class="table table-bordered bg-gradient-light elevation-1">
    <thead>
        <th>Usuarios y atributos</th>
        <th> </th>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>
                    <p>
                        <a href="#">{{ $usuario->name }} &nbsp; <i class="fas fa-edit"></i></a>
                    </p>
                    <strong>Email:</strong> {{ $usuario->email }} <br>
                    <strong>Activo desde:</strong> {{ $usuario->created_at->format('d/m/Y') }} <br>
                    <strong>Permisos:</strong>
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
                <td>
                    @can('borrar usuarios')
                        <i class="fas fa-trash"></i>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
