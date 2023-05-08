@extends('layouts.plantillabase')

@section('content')

<h1>REGISTROS DE SALIDAS DE ANIMALES </h1>
<a href="{{ route('animales.index') }}" class="btn btn-primary">Registrar salida de animal </a>
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
        @foreach($salidas as $salida)
        <tr>
            <td>{{$salida->id}}</td>
            <td>{{$salida->fechaSalida}}</td>
            <td>{{$salida->Animal->nombre}}</td>
            <td>{{$salida->tipoSalida}}</td>
            <td>{{$salida->detalle}}</td>
            <td>
                <form action="{{ route('salidaAnimales.destroy',$salida->id) }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('salidaAnimales.edit',$salida->id) }} " class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection