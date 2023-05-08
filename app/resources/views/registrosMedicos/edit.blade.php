@extends('layouts.plantillabase')

@section('content')
<h1>EDICIÓN DE REGISTRO MÉDICO</h1>

<form action="{{ route('registrosMedicos.update', $registro->id) }}"  method="POST" enctype="multipart/form-data" >
@method('PUT')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Fecha :</label>
        <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3"
        value="{{$registro->fecha}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tratamiento aplicado: </label>
        <input id="tratamiento" name="tratamiento" type="text" class="form-control" tabindex="3"
        value="{{$registro->tratamiento}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripción :</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3"
        value="{{$registro->descripcion}}">
    </div>

    <div>
        <h3> DATOS DE LA MASCOTA </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre : {{ $registro->Animal->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Especie : {{ $registro->Animal->TipoAnimal->tipo  }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Sexo : {{ $registro->Animal->sexo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Raza : {{ $registro->Animal->raza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Nombre de la raza : {{ $registro->Animal->nombreRaza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Fecha de nacimiento : {{ $registro->Animal->fechaNacimiento }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Procedencia : {{ $registro->Animal->procedencia }} </label>
    </div>

        <!-- Dejar estos input invisible solo se necesita para mandar ids -->
        <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{$registro->Animal->id}}">



    <a href="/registrosMedicos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection
