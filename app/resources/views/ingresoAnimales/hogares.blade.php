@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-form-title">
        <h1><b>
                <center>
                    Seleccione un hogar temporal
                </center>
        </h1>
    </div>

    <table id="registrosT" class="table  table-striped mt-4">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Encargado</th>
                <th scope="col">Telefono 1</th>
                <th scope="col">Telefono 2</th>
                <th scope="col">Dirección</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hogares as $hogar)
                <tr>
                    <td>{{ $hogar->id }}</td>
                    <td>{{ $hogar->nombreEncargado }}</td>
                    <td>{{ $hogar->telefono1 }}</td>
                    <td>{{ $hogar->telefono2 }}</td>
                    <td>{{ $hogar->direccion }}</td>
                    <td>
                        <form action="{{ route('ingresoAnimales.create') }} " method="GET">
                            @csrf
                            <!-- Dejar este input invisible solo se necesita para mandar id -->
                            <input type="hidden" id="hogar" name="hogar" type="text" value="{{ $hogar->id }}">
                            <input type="hidden" id="animal" name="animal" type="text" value="{{ $id }}">

                            @can('ingresoAnimales.create')
                                <button type="submit" class="btn btn-success">Seleccionar</button>
                            @endcan
                        </form>

                        @csrf
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
