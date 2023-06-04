@extends('layouts.plantillabase')


@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection


@section('content')
    <h1><b>
            <center> CONTRATOS</center>
    </h1>
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

            <table id="contratosT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Fecha </th>
                        <th scope="col">Mascota</th>
                        <th scope="col">Adoptante</th>
                        <th scope="col">Estado</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contratos as $contrato)
                        <tr>
                            <td>{{ $contrato->id }}</td>
                            <td>{{ $contrato->fechaSalida }}</td>
                            <td>{{ $contrato->Animal1->nombre }}</td>
                            <td>{{ $contrato->Adoptante1->nombre }} {{ $contrato->Adoptante1->apellido }}</td>
                            <td>{{ $contrato->estado }}</td>

                            <td>
                                <div class="dropbtn">
                                    <a class="btn btn-info dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Más opciones
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @can('contratos.show')
                                            <div><a href="{{ route('contratos.show', $contrato->id) }} "
                                                    class="dropdown-item">Ver contrato</a></div>
                                        @endcan
                                        @can('contratos.edit')
                                            <div><a href="{{ route('contratos.edit', $contrato->id) }} "
                                                    class="dropdown-item">Editar contrato</a></div>
                                        @endcan


                                    </div>
                                </div>
                            </td>
                            <td>
                                @can('contratos.show')
                                    <a href="print/{{ $contrato->id }}" class="btn btn-success">Imprimir</a>
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
            $('#contratosT').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@endsection
