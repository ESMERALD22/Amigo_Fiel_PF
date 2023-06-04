@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection

@section('content')
    <div class="formbold-form-title">
        <h1><b>
                <center>
                    REGISTROS MÉDICOS
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
                            <td>{{ $registro->Animal->nombre }}</td>
                            <td>{{ $registro->tratamiento }}</td>
                            <td>{{ $registro->descripcion }}</td>

                            <td>
                                <div class="dropbtn">
                                    <a class="btn btn-info dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Más opciones
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                        @can('registrosMedicos.show')
                                            <div><a href="{{ route('registrosMedicos.show', $registro->id) }} " class="dropdown-item">Información</a></div>
                                        @endcan

                                        @can('registrosMedicos.edit')
                                            <a href="{{ route('registrosMedicos.edit', $registro->id) }} "
                                                class="dropdown-item">Editar</a>
                                        @endcan

                                    </div>
                                </div>

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
