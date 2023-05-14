@extends('layouts.plantillabase')

@section('content')
    <h1>ANIMALES</h1>

    @can('animales.create')
        <a href="{{ route('animales.create') }}" class="btn btn-primary">Ingresar animal</a>
    @endcan

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Sexo</th>
                <th scope="col">Especie</th>
                <th scope="col">Raza</th>
                <th scope="col">Nombre Raza</th>
                <th scope="col">Nombre del Animal</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Edad</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fotografía</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animales as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->sexo }}</td>

                    <td>
                        {{ $animal->TipoAnimal->tipo }}
                    </td>
                    <td>{{ $animal->raza }}</td>
                    <td>{{ $animal->nombreRaza }}</td>
                    <td>{{ $animal->nombre }}</td>
                    <td>{{ $animal->fechaNacimiento }}</td>
                    <td>{{ $animal->edad }}</td>
                    <td>{{ $animal->descripcion }}</td>
                    <td>
                        <img src="{{ asset('uploads/animales/' . $animal->foto) }}" width="200px" height="200px"
                            alt="Image">
                    </td>

                    <td>
                        @can('contratos.create')
                            <div><a href="vista/{{ $animal->id }}" class="btn btn-primary">Adoptar</a></div>
                        @endcan
                    </td>

                    <td>
                        @can('ingresoAnimales.create')
                            <div><a href="hogar/{{ $animal->id }}" class="btn btn-success">Asignar hogar temporal</a></div>
                        @endcan
                    </td>

                    <td>
                        @can('animales.edit')
                            <div><a href="{{ route('animales.edit', $animal->id) }} " class="btn btn-info">Editar</a></div>
                        @endcan
                    </td>

                    <td>
                        @can('registrosMedicos.create')
                            <form action="{{ route('registrosMedicos.create') }} " method="GET">
                                @csrf
                                <!-- Dejar este input invisible solo se necesita para mandar id -->
                                <input type="hidden" id="id" name="id" type="text" value="{{ $animal->id }}">
                                <button type="submit" class="btn btn-info">Registrar tratamientos médicos</button>
                            </form>
                        @endcan
                    </td>

                    <td>
                        @can('salidaAnimales.create')
                            <form action="{{ route('salidaAnimales.create') }} " method="GET">
                                @csrf
                                <!-- Dejar este input invisible solo se necesita para mandar id -->
                                <input type="hidden" id="id" name="id" type="text" value="{{ $animal->id }}">
                                <button type="submit" class="btn btn-info">Salida</button>
                            </form>
                        @endcan
                    </td>

                    <td>
                        @can('animales.destroy')
                            <form action="{{ route('animales.destroy', $animal->id) }} " method="POST">
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
