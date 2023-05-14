@extends('layouts.plantillabase')

@section('content')
    <h1>LISTA DE USUARIOS</h1>

    @can('users.create')
        <a href="{{ route('users.create') }}" class="btn btn-primary">Registrar Usuario</a>
    @endcan

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo electrónico</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        @can('users.edit')
                            <a href="{{ route('users.edit', $usuario->id) }} " class="btn btn-info">Editar</a>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
