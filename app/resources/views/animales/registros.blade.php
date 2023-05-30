@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection

@section('content')
    <h1><center>REGISTROS MÉDICOS DE: {{ $animal->nombre }}</center></h1>

    @can('animales.show')
        <div><a href="{{ route('animales.show', $animal->id) }} " class="btn btn-secondary">Regresar</a></div>
    @endcan
    
    <div class="card">
        <div class="card-body">

            <table id="registrosT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tratamiento</th>
                        <th scope="col">Descripción</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->fecha }}</td>
                            <td>{{ $registro->tratamiento }}</td>
                            <td>{{ $registro->descripcion }}</td>
                            <td>
                                @can('registrosMedicos.edit')
                                    <a href="{{ route('registrosMedicos.edit', $registro->id) }} " class="btn btn-info">Editar</a>
                                @endcan
                            </td>
                            <td>
                                @can('registrosMedicos.destroy')
                                    <form action="{{ route('registrosMedicos.destroy', $registro->id) }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
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
            $('#registrosT').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@endsection
