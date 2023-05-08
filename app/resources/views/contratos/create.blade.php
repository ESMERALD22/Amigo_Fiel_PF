@extends('layouts.plantillabase')

@section('content')
<h1>VISTA CREATE CONTRATO</h1>

<form action="{{ route('contratos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <h3> FECHA </h3>
        <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" tabindex="3">
    </div>

    <div>
        <h3> LUGAR </h3>
        <input id="lugar" name="lugar" type="text" class="form-control" tabindex="3">
    </div>

    <div>
        <h3> DATOS DEL ADOPTANTE </h3>
    </div>
    <div>
        <label for="" class="form-label"> NOMBRE: {{ $adoptante->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> DPI: {{ $adoptante->dpi }} </label>
    </div>
    <div>
        <label for="" class="form-label"> TELEFONO 1: {{ $adoptante->telefono1 }} </label>
    </div>
    <div>
        <label for="" class="form-label"> TELEFONO 2: {{ $adoptante->telefono2 }} </label>
    </div>
    <div>
        <label for="" class="form-label"> CORREO ELECTRONICO: {{ $adoptante->correo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> DOMICILIO: {{ $adoptante->direccion }} </label>
    </div>

    <div>
        <h3> DATOS DEL REPRESENTANTE DE LA ASOCIACION </h3>
    </div>
    <div>
        <label for="" class="form-label"> NOMBRE: {{ $socio->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> APELLIDO: {{ $socio->apellido }} </label>
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

    <div >
        <label for="" class="form-label"> OBSERVACIONES: </label>
        <input id="observacion" name="observacion" type="text" class="form-control" tabindex="3">
    </div>

    <!-- Dejar estos input invisible solo se necesita para mandar ids -->
    <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{$animal->id}}">
    <input type="hidden" id="idSocio" name="idSocio" type="text" value="1" >
    <input type="hidden" id="idAdoptante" name="idAdoptante" type="text" value="{{$adoptante->id}}">
    <input type="hidden" id="estado" name="estado" type="text" value="valido">



    <div>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>
    <div>
        <a href="/contratos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    </div>

</form>
@endsection