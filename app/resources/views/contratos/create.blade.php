@extends('layouts.plantillabase')

@section('content')
<h1>CREACIÓN DEL CONTRATO</h1>

<form action="{{ route('contratos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <h3> Fecha : </h3>
        <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" tabindex="3">
    </div>

    <div>
        <h3> Lugar : </h3>
        <input id="lugar" name="lugar" type="text" class="form-control" tabindex="3">
    </div>

    <div>
        <h3> Datos del adoptante </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre : {{ $adoptante->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> DPI : {{ $adoptante->dpi }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Teléfono 1 : {{ $adoptante->telefono1 }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Teléfono 2 : {{ $adoptante->telefono2 }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Correo electrónico : {{ $adoptante->correo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Domicilio : {{ $adoptante->direccion }} </label>
    </div>

    <div>
        <h3> Datos del representante de la asoción </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombres : {{ $socio->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Apellidos : {{ $socio->apellido }} </label>
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
        <label for="" class="form-label"> Nombre de la Raza: {{ $animal->nombreRaza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Fecha de nacimiento: {{ $animal->fechaNacimiento }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Procedencia : {{ $animal->procedencia }} </label>
    </div>

    <div >
        <label for="" class="form-label"> Observaciones : </label>
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