@extends('layouts.plantillabase')


@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection


@section('content')
    <div class="formbold-form-title">
        <h1><b>
                <center>
                    REGISTROS DE SALIDAS DE ANIMALES
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

            <table id="registrosT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Animal</th>
                        <th scope="col">Tipo de salida</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salidas as $salida)
                        <tr>
                            <td>{{ $salida->id }}</td>
                            <td>{{ $salida->fechaSalida }}</td>
                            <td>{{ $salida->Animal->nombre }}</td>
                            <td>{{ $salida->tipoSalida }}</td>
                            <td>
                                <div class="dropbtn">
                                    <a class="btn btn-info dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Más opciones
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                        @can('salidaAnimales.show')
                                            <div><a href=" {{ route('salidaAnimales.show', $salida->id) }} " class="dropdown-item">Información</a></div>
                                        @endcan

                                        @can('salidaAnimales.edit')
                                            <a href="{{ route('salidaAnimales.edit', $salida->id) }} "
                                                class="dropdown-item"s>Editar</a>
                                        @endcan

                                    </div>
                                </div>

                            </td>

                            <td>
                                @can('salidaAnimales.destroy')
                                    <form action="{{ route('salidaAnimales.destroy', $salida->id) }} " method="POST">
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
