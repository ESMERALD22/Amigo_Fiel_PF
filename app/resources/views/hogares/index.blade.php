@extends('layouts.plantillabase')

@section('content')

<h1>HOGARES TEMPORALES</h1>
<a href="{{ route('hogares.create') }}" class="btn btn-primary">Registrar hogar temporal</a>
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
        @foreach($hogares as $hogar)
        <tr>
            <td>{{$hogar->id}}</td>
            <td>{{$hogar->nombreEncargado}}</td>
            <td>{{$hogar->telefono1}}</td>
            <td>{{$hogar->telefono2}}</td>
            <td>{{$hogar->direccion}}</td>
            <td>
                <form action="{{ route('hogares.destroy',$hogar->id) }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('hogares.edit',$hogar->id) }} " class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection