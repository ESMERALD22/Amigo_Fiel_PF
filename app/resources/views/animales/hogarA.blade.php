@extends('layouts.plantillabase')

@section('content')
    <h1> HOGARES TEMPORALES</h1>

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
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/animales" class="btn btn-secondary" tabindex="5">Inicio</a>

@endsection
