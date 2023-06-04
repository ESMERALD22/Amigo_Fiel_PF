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

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Fecha :</label>
                    <input id="fechaSalida" name="fechaSalida" type="text" tabindex="3" class="form-control" value="{{ $date }}"
                        readonly>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Lugar :</label>
                    <input id="lugar" name="lugar" type="text" tabindex="3" class="form-control" value="{{ $contrato->lugar }}" readonly>
                </div>

                <div>
                    <h3> Datos del adoptante </h3>
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="nombre" name="nombre" type="text" class="form-control" 
                        value="{{ $contrato->Adoptante1->nombre }}" readonly>
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> DPI:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Adoptante1->dpi }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Teléfono 1:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Adoptante1->telefono1 }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Teléfono 2:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Adoptante1->telefono2 }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Correo electrónico:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Adoptante1->correo }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Domicilio:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Adoptante1->direccion }}">
                </div>

                <div class="formbold-mb-3">
                    <h3> Datos del representante de la asoción </h3>
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->User->name }}">
                </div>

                <div class="formbold-mb-3">
                    <h3> Datos de la mascota </h3>
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Animal1->nombre }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Especie: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Animal1->TipoAnimal->tipo }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Sexo: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Animal1->sexo }}">
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Raza: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Animal1->raza }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Nombre de la raza:
                        <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                            value="{{ $contrato->Animal1->nombreRaza }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Fecha de nacimiento: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Animal1->fechaNacimiento }}">
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Edad: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $contrato->Animal1->edad }}">
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="form-label"> Observaciones : </label>
                    <input id="descripcion" name="descripcion" type="longtext" class="form-control" tabindex="3" value="{{ $contrato->observacion }}" readonly>
                </div>

                @can('contratos.index')
                <a href="/contratos" class="btn btn-secondary" tabindex="5">Regresar</a>
                @endcan


            </form>
        </div>
    </div>
@endsection
