@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-form-title">
        <h1><b>
                <center> LISTA DE USUARIOS</center>
        </h1>
    </div>

    @can('users.create')
        <a href="{{ route('users.create') }}" class="btn btn-primary">Registrar Usuario</a>
    @endcan

    <div class="card">
        <div class="card-body">

            <table id="tiposT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col"></th>
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
        </div>
    </div>
@endsection

@section('js')
    <script src="/DataTables/datatables.js"></script>
    <script>
        $(document).ready(function() {
            $('#tiposT').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@endsection
