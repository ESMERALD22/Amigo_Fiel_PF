@extends('layouts.plantillabase')

@section('content')
<h1>VISTA CREATE ADOPTANTE</h1>

<form action="{{ route('registrosMedicos.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Fecha </label>
        <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tratamiento</label>
        <input id="tratamiento" name="tratamiento" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
    </div>

    <div>
        <h3> DATOS DE LA MASCOTA </h3>
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
        <label for="" class="form-label"> FECHA DE NACIMIENTO: {{ $animal->fechaNacimiento }} </label>
    </div>
    <div>
        <label for="" class="form-label"> PROCEDENCIA: {{ $animal->procedencia }} </label>
    </div>

        <!-- Dejar estos input invisible solo se necesita para mandar ids -->
        <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{$animal->id}}">


    <a href="/registrosMedicos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection
