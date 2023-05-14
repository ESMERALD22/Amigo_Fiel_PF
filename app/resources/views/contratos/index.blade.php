@extends('layouts.plantillabase')

@section('content')

<h1>CONTRATOS</h1>
@can('animales.index')
<a href="{{ route('animales.index') }}" class="btn btn-primary">Generar contrato</a>
@endcan

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Número de contrato</th>
            <th scope="col">Fecha de contrato</th>
            <th scope="col">Lugar</th>
            <th scope="col">Mascota</th>
            <th scope="col">Adoptante</th>
            <th scope="col">Estado</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Socio</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contratos as $contrato)
        <tr>
            <td>{{$contrato->id}}</td>
            <td>{{$contrato->idContrato}}</td>
            <td>{{$contrato->fechaSalida }}</td>
            <td>{{$contrato->lugar}}</td>
            <td>{{$contrato->Animal1->nombre}}</td>
            <td>{{$contrato->Adoptante1->nombre}} {{$contrato->Adoptante1->apellido}}</td>
            <td>{{$contrato->estado}}</td>
            <td>{{$contrato->observacion}}</td>
            <td>{{$contrato->Socio->nombre}} {{$contrato->Socio->apellido}}</td>

            <td>
                @can('contrato.show')                
                    <a href="{{ route('contratos.show',$contrato->id) }} " class="btn btn-info">VER CONTRATO</a>
                @endcan
                </td>
            <td>
                <a href=" " class="btn btn-success">Imprimir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection