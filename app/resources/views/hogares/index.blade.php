@extends('layouts.plantillabase')

@section('content')
    <h1><b>
            <center> HOGARES TEMPORALES</center>
    </h1>
    @can('hogares.create')
        <a href="{{ route('hogares.create') }}" class="btn-lg btn-primary">Registrar hogar temporal</a>
    @endcan

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Encargado</th>
                <th scope="col">Teléfono 1</th>
                <th scope="col">Teléfono 2</th>
                <th scope="col">Dirección</th>
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
                        @can('hogares.show')
                            <a href="{{ route('hogares.show', $hogar->id) }} " class="btn btn-info">Información</a>
                        @endcan
                    </td>
                    <td>
                        @can('hogares.edit')
                            <a href="{{ route('hogares.edit', $hogar->id) }} " class="btn btn-success">Editar</a>
                        @endcan
                    </td>
                    <td>
                        @can('hogares.destroy')
                            <form action="{{ route('hogares.destroy', $hogar->id) }} " method="POST">
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
