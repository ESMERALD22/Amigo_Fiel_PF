@extends('layouts.plantillabase')

@section('content')
<h1>VISTA  DE CONTRATO</h1>

<form  enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <h3> Fecha : </h3>
        <label for="" class="form-label"> {{ $date }} </label>
    </div>

    <div>
        <h3> Lugar : </h3>
        <label for="" class="form-label"> {{ $contrato->lugar }} </label>
    </div>

    <div>
        <h3> Datos del adoptante </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre: {{ $contrato->Adoptante1->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> DPI: {{ $contrato->Adoptante1->dpi }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Teléfono 1: {{ $contrato->Adoptante1->telefono1 }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Teléfono 2: {{ $contrato->Adoptante1->telefono2 }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Correro electrónico : {{ $contrato->Adoptante1->correo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Domicilio : {{ $contrato->Adoptante1->direccion }} </label>
    </div>

    <div>
        <h3> Datos del representante de la asociación </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre : {{ $contrato->Socio->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Apellido : {{ $contrato->Socio->apellido }} </label>
    </div>

    <div>
        <h3> Datos de la mascota </h3>
    </div>
    <div>
        <label for="" class="form-label"> Nombre : {{ $contrato->Animal1->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Especie : {{ $contrato->Animal1->TipoAnimal->tipo  }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Sexo : {{ $contrato->Animal1->sexo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Tipo : {{ $contrato->Animal1->raza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Nombre raza : {{ $contrato->Animal1->nombreRaza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Fecha de nacimiento : {{ $contrato->Animal1->fechaNacimiento }} </label>
    </div>
    <div>
        <label for="" class="form-label"> Procedencia : {{ $contrato->Animal1->procedencia }} </label>
    </div>

    <div >
        <label for="" class="form-label"> Observaciones : {{ $contrato->observacion }} </label>
    </div>

    <div>
        <a href="/contratos" class="btn btn-secondary" tabindex="5">Regresar</a>
    </div>

</form>
@endsection