@extends('layouts.plantillabase')

@section('content')
<h1>EDICIÓN DE REGISTRO DE SALIDA DE ANIMAL</h1>

<form action="{{ route('salidaAnimales.update', $salida->id) }}"  method="POST" enctype="multipart/form-data" >
@method('PUT')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Fecha de salida:</label>
        <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" tabindex="3" 
        value ="{{$salida->fechaSalida}}">
    </div>



    <div class="mb-3">
        <label for="" class="form-label">Tipo de salida :</label>
        <select name="tipoSalida">
            @foreach ($tiposSalida as $tipo1){
            @if($salida->tipoSalida == $tipo1)
            <option value="{{$tipo1}}" selected> {{$tipo1}}</option>
            @else
            <option value="{{$tipo1}}"> {{$tipo1}}</option>
            @endif
            }
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Detalles :</label>
        <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3"
        value="{{$salida->detalle}}">
    </div>

    <div>
        <h3> DATOS DE LA MASCOTA </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre : {{ $salida->Animal->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Especie : {{ $salida->Animal->TipoAnimal->tipo  }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Sexo : {{ $salida->Animal->sexo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Raza : {{ $salida->Animal->raza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Nombre de la raza : {{ $salida->Animal->nombreRaza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Fecha de nacimiento : {{ $salida->Animal->fechaNacimiento }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Procedencia : {{ $salida->Animal->procedencia }} </label>
    </div>

    <!-- Dejar estos input invisible solo se necesita para mandar ids -->
    <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{$salida->Animal->id}}">


    <a href="/salidaAnimales" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection
