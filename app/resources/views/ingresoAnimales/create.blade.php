@extends('layouts.plantillabase')

@section('content')
<h1>VISTA CREATE INGRESO ANIMAL</h1>

<form action="{{ route('ingresoAnimales.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Fecha de ingreso </label>
        <input id="fechaIngreso" name="fechaIngreso" type="date" class="form-control" tabindex="3">
    </div>  

    <div class="mb-3">
        <label for="" class="form-label">Procedencia</label>
        <input id="procedencia" name="procedencia" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Otros detalles</label>
        <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3">
    </div>

    <div>
        <h3> DATOS DEL HOGAR </h3>
    </div>
    <div>
        <label for="" class="form-label"> Encargado: {{ $hogar->nombreEncargado }} </label>
    </div>
    <div>
        <label for="" class="form-label"> APELLIDO: {{ $hogar->direccion }} </label>
    </div>


    <div>
        <h3> DATOS DEL ANIMAL </h3>
    </div>
    <div>
        <label for="" class="form-label"> NOMBRE: {{ $animal->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> ESPECIE: {{ $animal->TipoAnimal->tipo  }} </label>
    </div>
    <div>
        <label for="" class="form-label"> SEXO: {{ $animal->sexo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> TIPO: {{ $animal->raza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> NOMBRE RAZA: {{ $animal->nombreRaza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> PROCEDENCIA: {{ $animal->procedencia }} </label>
    </div>

        <!-- Dejar estos input invisible solo se necesita para mandar ids -->
    <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{$animal->id}}">
    <input type="hidden" id="idHogar" name="idHogar" type="text" value="{{$hogar->id}}">


    <a href="/ingresoAnimales" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection
