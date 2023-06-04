@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection


@section('content')
    <div class="formbold-form-title">
        <h1><b>
                <center>
                    REGISTRO DE INGRESOS DE ANIMALES EN HOGARES TEMPORALES
                </center>
        </h1>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-dark table-striped mt-4">
                <table id="registrosT" class="table  table-striped mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Fecha de ingreso</th>
                            <th scope="col">Animal</th>
                            <th scope="col">Hogar temporal </th>
                            <th scope="col">Procedencia</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ingresos as $ingreso)
                            <tr>
                                <td>{{ $ingreso->id }}</td>
                                <td>{{ $ingreso->fechaIngreso }}</td>
                                <td>{{ $ingreso->Animal->nombre }}</td>
                                <td>{{ $ingreso->Hogar->nombreEncargado }}</td>
                                <td>{{ $ingreso->procedencia }}</td>
                                <td>
                                    <div class="dropbtn">
                                        <a class="btn btn-info dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Más opciones
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                            @can('ingresoAnimales.show')
                                                <div><a href="{{ route('ingresoAnimales.show', $ingreso->id) }}  "
                                                        class="dropdown-item">Información</a></div>
                                            @endcan

                                            @can('ingresoAnimales.edit')
                                                <div><a href="{{ route('ingresoAnimales.edit', $ingreso->id) }}  "
                                                        class="dropdown-item">Edit</a></div>
                                            @endcan
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    @can('ingresoAnimales.destroy')
                                        <form action="{{ route('ingresoAnimales.destroy', $ingreso->id) }} " method="POST">
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
