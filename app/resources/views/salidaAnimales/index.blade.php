@extends('layouts.plantillabase')

@section('content')
    <h1>REGISTROS DE SALIDAS DE ANIMALES </h1>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha</th>
                <th scope="col">Animal</th>
                <th scope="col">Tipo de salida</th>
                <th scope="col">Detalles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salidas as $salida)
                <tr>
                    <td>{{ $salida->id }}</td>
                    <td>{{ $salida->fechaSalida }}</td>
                    <td>{{ $salida->Animal->nombre }}</td>
                    <td>{{ $salida->tipoSalida }}</td>
                    <td>{{ $salida->detalle }}</td>

                    <td>
                        @can('salidaAnimales.edit')
                            <a href="{{ route('salidaAnimales.edit', $salida->id) }} " class="btn btn-info">Editar</a>
                        @endcan
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
@endsection
