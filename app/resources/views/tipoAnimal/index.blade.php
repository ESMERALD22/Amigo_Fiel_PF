@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection

@section('content')
    <div class="formbold-form-title">
        <h1><b>
                <center> TIPOS DE ANIMALES</center>
        </h1>
    </div>

    @can('tipoAnimal.create')
        <a href="{{ route('tipoAnimal.create') }}" class="btn-lg btn-primary">Ingresar tipo de animal</a>
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

            <table id="tiposT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nombre</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipos as $tipo)
                        <tr>
                            <td>{{ $tipo->id }}</td>
                            <td>{{ $tipo->tipo }}</td>

                            <td>

                                <div class="dropbtn">
                                    <a class="btn btn-info dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Más opciones
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @can('tipoAnimal.show')
                                            <div> <a href="{{ route('tipoAnimal.show', $tipo->id) }} "
                                                    class="dropdown-item">Información</a></div>
                                        @endcan

                                        @can('tipoAnimal.edit')
                                            <div><a href="{{ route('tipoAnimal.edit', $tipo->id) }} "
                                                    class="dropdown-item">Editar</a></div>
                                        @endcan

                                    </div>
                                </div>
                            </td>

                            <td>

                                @can('tipoAnimal.destroy')
                                <div>
                                    <form action="{{ route('tipoAnimal.destroy', $tipo->id) }} "
                                        method="POST">
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
            $('#tiposT').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@endsection
