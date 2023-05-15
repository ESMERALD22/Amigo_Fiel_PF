@extends('layouts.plantillabase')

@section('content')
    <h1><b>
            <center> ADOPTANTES</center>
    </h1>



    @can('adoptantes.create')
        <a href="{{ route('adoptantes.create') }}" class="btn-lg btn-primary">Ingresar adoptante</a>
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



    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">DPI</th>
                <th scope="col">Teléfono 1</th>
                <th scope="col">Teléfono 2</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Dirección</th>
                <th scope="col">Otros detalles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptantes as $adoptante)
                <tr>
                    <td>{{ $adoptante->id }}</td>
                    <td>{{ $adoptante->nombre }}</td>

                    <td>
                        {{ $adoptante->apellido }}
                    </td>
                    <td>{{ $adoptante->dpi }}</td>
                    <td>{{ $adoptante->telefono1 }}</td>
                    <td>{{ $adoptante->telefono2 }}</td>
                    <td>{{ $adoptante->correo }}</td>
                    <td>{{ $adoptante->direccion }}</td>
                    <td>{{ $adoptante->detalles }}</td>

                    <td>
                        @can('adoptantes.show')
                            <a href="{{ route('adoptantes.show', $adoptante->id) }} " class="btn btn-info">Información</a>
                        @endcan
                    </td>
                    <td>
                        @can('adoptantes.edit')
                            <a href="{{ route('adoptantes.edit', $adoptante->id) }} " class="btn btn-success">Editar</a>
                        @endcan
                    </td>
                    <td>
                        @can('adoptantes.destroy')
                            <form action="{{ route('adoptantes.destroy', $adoptante->id) }} " method="POST">
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
