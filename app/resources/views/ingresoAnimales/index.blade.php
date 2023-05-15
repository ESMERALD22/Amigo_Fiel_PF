@extends('layouts.plantillabase')

@section('content')
    <h1>REGISTRO DE INGRESOS DE ANIMALES EN HOGARES TEMPORALES</h1>



    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Animal</th>
                <th scope="col">Hogar temporal </th>
                <th scope="col">Procedencia</th>
                <th scope="col">Detalles</th>
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
                    <td>{{ $ingreso->detalle }}</td>
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
@endsection
