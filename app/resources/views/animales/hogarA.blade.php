@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection

@section('content')
    <h1>
        <center> HOGARES TEMPORALES DE: {{ $animal->nombre }}</center>
    </h1>

    @can('animales.show')
        <div><a href="{{ route('animales.show', $animal->id) }} " class="btn btn-secondary">Regresar</a></div>
    @endcan

    <div class="card">
        <div class="card-body">

            <table id="hogaresT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Animal</th>
                        <th scope="col">Hogar temporal </th>
                        <th scope="col">Procedencia</th>
                        <th></th>
                        <th></th>
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
                                            <div><a href="/vistaHA1/{{ $ingreso->id }}" class="dropdown-item">Información</a>
                                            </div>
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
            $('#hogaresT').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@endsection
