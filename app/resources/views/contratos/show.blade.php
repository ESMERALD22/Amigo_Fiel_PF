@extends('layouts.plantillabase')

@section('content')
<h1>VISTA SHOW CONTRATO</h1>

<form action="{{ route('contratos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <h3> FECHA </h3>
        <label for="" class="form-label"> {{ $contrato->fechaSalida }} </label>
    </div>

    <div>
        <h3> LUGAR </h3>
        <label for="" class="form-label"> {{ $contrato->lugar }} </label>
    </div>

    <div>
        <h3> DATOS DEL ADOPTANTE </h3>
    </div>
    <div>
        <label for="" class="form-label"> NOMBRE: {{ $contrato->Adoptante1->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> DPI: {{ $contrato->Adoptante1->dpi }} </label>
    </div>
    <div>
        <label for="" class="form-label"> TELEFONO 1: {{ $contrato->Adoptante1->telefono1 }} </label>
    </div>
    <div>
        <label for="" class="form-label"> TELEFONO 2: {{ $contrato->Adoptante1->telefono2 }} </label>
    </div>
    <div>
        <label for="" class="form-label"> CORREO ELECTRONICO: {{ $contrato->Adoptante1->correo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> DOMICILIO: {{ $contrato->Adoptante1->direccion }} </label>
    </div>

    <div>
        <h3> DATOS DEL REPRESENTANTE DE LA ASOCIACION </h3>
    </div>
    <div>
        <label for="" class="form-label"> NOMBRE: {{ $contrato->Socio->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> APELLIDO: {{ $contrato->Socio->apellido }} </label>
    </div>

    <div>
        <h3> DATOS DE LA MASCOTA </h3>
    </div>
    <div>
        <label for="" class="form-label"> APELLIDO: {{ $contrato->Animal1->nombre }} </label>
    </div>
    <div>
        <label for="" class="form-label"> ESPECIE: {{ $contrato->Animal1->TipoAnimal->tipo  }} </label>
    </div>
    <div>
        <label for="" class="form-label"> SEXO: {{ $contrato->Animal1->sexo }} </label>
    </div>
    <div>
        <label for="" class="form-label"> TIPO: {{ $contrato->Animal1->raza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> NOMBRE RAZA: {{ $contrato->Animal1->nombreRaza }} </label>
    </div>
    <div>
        <label for="" class="form-label"> FECHA DE NACIMIENTO: {{ $contrato->Animal1->fechaNacimiento }} </label>
    </div>
    <div>
        <label for="" class="form-label"> PROCEDENCIA: {{ $contrato->Animal1->procedencia }} </label>
    </div>

    <div >
        <label for="" class="form-label"> OBSERVACIONES: {{ $contrato->observacion }} </label>
    </div>

    <div>
        <a href="/contratos" class="btn btn-secondary" tabindex="5">REGRESAR</a>
    </div>

</form>
@endsection