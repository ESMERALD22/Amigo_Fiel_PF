@extends('layouts.plantillabase')

@section('content')

<h1>VISTA INDEX ADOPTANTE</h1>
<a href="{{ route('animales.index') }}" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Animal</th>
            <th scope="col">Tratamiento</th>
            <th scope="col">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->id}}</td>
            <td>{{$registro->fecha}}</td>
            <td>{{$registro->Animal->nombre}}</td>
            <td>{{$registro->tratamiento}}</td>
            <td>{{$registro->descripcion}}</td>
            <td>
                <form action="{{ route('registrosMedicos.destroy',$registro->id) }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('registrosMedicos.edit',$registro->id) }} " class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection