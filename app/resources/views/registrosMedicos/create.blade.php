@extends('layouts.plantillabase')

@section('content')
<h1>REGISTRO MÉDICO</h1>

<form action="{{ route('registrosMedicos.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Fecha :</label>
        <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tratamiento aplicado:</label>
        <input id="tratamiento" name="tratamiento" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripción :</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
    </div>

    <div>
        <h3> Datos de la mascota </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre : {{ $animal->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Especie : {{ $animal->TipoAnimal->tipo  }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Sexo : {{ $animal->sexo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Raza : {{ $animal->raza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Nombre raza : {{ $animal->nombreRaza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Fecha de nacimiento : {{ $animal->fechaNacimiento }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Procedencia : {{ $animal->procedencia }} </label>
    </div>

        <!-- Dejar estos input invisible solo se necesita para mandar ids -->
        <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{$animal->id}}">


    <a href="/registrosMedicos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection
