@extends('layouts.plantillabase')

@section('content')
    <h1>REGISTROS MÉDICOS DE: {{ $animal->nombre}}</h1>
    

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha</th>
                <th scope="col">Tratamiento</th>
                <th scope="col">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->fecha }}</td>
                    <td>{{ $registro->tratamiento }}</td>
                    <td>{{ $registro->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/animales" class="btn btn-secondary" tabindex="5">Inicio</a>

@endsection
