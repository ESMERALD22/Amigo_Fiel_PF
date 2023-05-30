@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        INFORMACIÓN DEL CONTRATO
                </h1>
            </div>

            <form enctype="multipart/form-data">
                @csrf

                <div class="formbold-input-flex">
                    <div>
                        <h3> Fecha : </h3>
                        <label for="" class="formbold-form-label"> {{ $date }} </label>
                    </div>

                    <div>
                        <h3> Lugar : </h3>
                        <label for="" class="formbold-form-label"> {{ $contrato->lugar }} </label>
                    </div>
                </div>

                <div>
                    <h3> Datos del adoptante </h3>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Nombre: {{ $contrato->Adoptante1->nombre }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> DPI: {{ $contrato->Adoptante1->dpi }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Teléfono 1: {{ $contrato->Adoptante1->telefono1 }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Teléfono 2: {{ $contrato->Adoptante1->telefono2 }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Correro electrónico : {{ $contrato->Adoptante1->correo }}
                    </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Domicilio : {{ $contrato->Adoptante1->direccion }} </label>
                </div>

                <div>
                    <h3> Datos del representante de la asociación </h3>
                </div>

                    <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Nombre : {{ $contrato->Socio->nombre }} </label>
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Apellido : {{ $contrato->Socio->apellido }} </label>
                </div>

                <div>
                    <h3> Datos de la mascota </h3>
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Nombre : {{ $contrato->Animal1->nombre }} </label>
                </div>

                    <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Especie : {{ $contrato->Animal1->TipoAnimal->tipo }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Sexo : {{ $contrato->Animal1->sexo }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Tipo : {{ $contrato->Animal1->raza }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Nombre raza : {{ $contrato->Animal1->nombreRaza }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Fecha de nacimiento :
                        {{ $contrato->Animal1->fechaNacimiento }} </label>
                </div>

                    <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Procedencia : {{ $contrato->Animal1->procedencia }} </label>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Observaciones : {{ $contrato->observacion }} </label>
                </div>

                <div>   
                    <a href="/contratos" class="btn btn-secondary" tabindex="5">Regresar</a>
                </div>

            </form>
        </div>
    </div>
@endsection
