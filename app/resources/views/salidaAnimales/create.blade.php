@extends('layouts.plantillabase')

@section('content')
<h1>VISTA CREATE salidaAnimales</h1>

<form action="{{ route('salidaAnimales.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Fecha Salida</label>
        <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tipo salida *</label>
        <select name="tipoSalida">
            <option value="Adopción">Adopción</option>
            <option value="Retorno a su hogar">Retorno a su hogar</option>
            <option value="Muerte">Muerte</option>
            <option value="Otro">Otro</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Detalles</label>
        <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3">
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

    <div>
        <a href="/animales" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection