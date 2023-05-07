@extends('layouts.plantillabase')

@section('content')

<h1>VISTA INDEX ANIMALES</h1>
<a href="{{ route('animales.create') }}" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Sexo</th>
            <th scope="col">Tipo Animal</th>
            <th scope="col">Raza</th>
            <th scope="col">Nombre Raza</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Edad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($animales as $animal)
        <tr>
            <td>{{$animal->id}}</td>
            <td>{{$animal->sexo}}</td>

            <td>
                {{ $animal->TipoAnimal->tipo }}
            </td>

            <td>{{$animal->idTipoAnimal}}</td>
            <td>{{$animal->raza}}</td>
            <td>{{$animal->nombreRaza}}</td>
            <td>{{$animal->nombre}}</td>
            <td>{{$animal->fechaNacimiento}}</td>
            <td>{{$animal->edad}}</td>
            <td>{{$animal->descripcion}}</td>
            <td> <img src="{{ asset('uploads/animales/'.$animal->foto) }}" width="200px" height="200px" alt="Image"> </td>

            <td>
                <form action="{{ route('animales.destroy',$animal->id) }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('animales.edit',$animal->id) }} " class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection