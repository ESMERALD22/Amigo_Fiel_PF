@extends('layouts.plantillabase')

@section('content')
<h1> INGRESO DE ANIMAL EN UN HOGAR TEMPORAL </h1>

<form action="{{ route('ingresoAnimales.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Fecha de ingreso del animal :</label>
        <input id="fechaIngreso" name="fechaIngreso" type="date" class="form-control" tabindex="3">
    </div>  

    <div class="mb-3">
        <label for="" class="form-label">Procedencia :</label>
        <input id="procedencia" name="procedencia" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Otros detalles :</label>
        <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3">
    </div>

    <div>
        <h3> Datos del hogar temporal </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre del encargado: {{ $hogar->nombreEncargado }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Dirección : {{ $hogar->direccion }} </label>
    </div>


    <div>
        <h3> Datos del animal </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre: {{ $animal->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Especie: {{ $animal->TipoAnimal->tipo  }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Sexo: {{ $animal->sexo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Raza: {{ $animal->raza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Nombre de la raza: {{ $animal->nombreRaza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Procedencia: {{ $animal->procedencia }} </label>
    </div>

        <!-- Dejar estos input invisible solo se necesita para mandar ids -->
    <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{$animal->id}}">
    <input type="hidden" id="idHogar" name="idHogar" type="text" value="{{$hogar->id}}">


    <a href="/ingresoAnimales" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection
