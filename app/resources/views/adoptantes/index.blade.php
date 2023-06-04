@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection

@section('content')
    <div class="formbold-form-title">
        <h1><b>
                <center> ADOPTANTES</center>
        </h1>
    </div>

    @can('adoptantes.create')
        <a href="{{ route('adoptantes.create') }}" class="btn-lg btn-primary">Ingresar adoptante</a>
    @endcan

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

            <table id="adoptantesT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Teléfono 1</th>
                        <th scope="col">Teléfono 2</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($adoptantes as $adoptante)
                        <tr>
                            <td>{{ $adoptante->id }}</td>
                            <td>{{ $adoptante->nombre }} {{ $adoptante->apellido }}</td>

                            <td>{{ $adoptante->telefono1 }}</td>
                            <td>{{ $adoptante->telefono2 }}</td>

                            <td>

                                <div class="dropbtn">
                                    <a class="btn btn-info dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Más opciones
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @can('adoptantes.show')
                                            <div> <a href="{{ route('adoptantes.show', $adoptante->id) }} "
                                                    class="dropdown-item">Información</a></div>
                                        @endcan

                                        @can('adoptantes.edit')
                                            <div><a href="{{ route('adoptantes.edit', $adoptante->id) }} "
                                                    class="dropdown-item">Editar</a></div>
                                        @endcan

                                    </div>
                                </div>
                            </td>

                            <td>

                                @can('adoptantes.destroy')
                                    <div>
                                        <form action="{{ route('adoptantes.destroy', $adoptante->id) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                        </form>
                                    </div>
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
            $('#adoptantesT').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@endsection
