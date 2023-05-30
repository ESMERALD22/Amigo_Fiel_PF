@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection

@section('content')
    <div class="formbold-form-title">
        <h1><b>
                <center> HOGARES TEMPORALES</center>
        </h1>
    </div>

    @can('hogares.create')
        <a href="{{ route('hogares.create') }}" class="btn-lg btn-primary">Registrar hogar temporal</a>
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


            <table id="hogaresT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Propietario</th>
                        <th scope="col">Teléfono 1</th>
                        <th scope="col">Teléfono 2</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($hogares as $hogar)
                        <tr>
                            <td>{{ $hogar->id }}</td>
                            <td>{{ $hogar->nombreEncargado }}</td>
                            <td>{{ $hogar->telefono1 }}</td>
                            <td>{{ $hogar->telefono2 }}</td>


                            <td>
                                <div class="dropbtn">
                                    <a class="btn btn-info dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Más opciones
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" >

                                        @can('hogares.show')
                                            <div><a href="{{ route('hogares.show', $hogar->id) }} "
                                                    class="dropdown-item">Información</a></div>
                                        @endcan

                                        @can('hogares.edit')
                                            <div><a href="{{ route('hogares.edit', $hogar->id) }} "
                                                    class="dropdown-item">Editar</a></div>
                                        @endcan

                                    </div>
                                </div>
                            </td>

                            <td>
                                @can('hogares.destroy')
                                    <div>
                                        <form action="{{ route('hogares.destroy', $hogar->id) }} " method="POST">
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
        <div class="card-footer">
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
