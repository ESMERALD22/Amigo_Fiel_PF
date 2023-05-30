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
                        <th scope="col">Número de contrato</th>
                        <th scope="col">Fecha de contrato</th>
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
                            <td>{{ $contrato->idContrato }}</td>
                            <td>{{ $contrato->fechaSalida }}</td>
                            <td>{{ $contrato->Animal1->nombre }}</td>
                            <td>{{ $contrato->Adoptante1->nombre }} {{ $contrato->Adoptante1->apellido }}</td>
                            <td>{{ $contrato->estado }}</td>

                            <td>
                                @can('contrato.show')
                                    <a href="{{ route('contratos.show', $contrato->id) }} " class="btn btn-info">VER
                                        CONTRATO</a>
                                @endcan
                            </td>
                            <td>
                                <a href=" " class="btn btn-success">Imprimir</a>
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
