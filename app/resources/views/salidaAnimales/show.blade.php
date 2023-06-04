@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>

                        EDICIÓN DE REGISTRO DE SALIDA DE ANIMAL
                </h1>
            </div>

            <form action="{{ route('salidaAnimales.update', $salida->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Fecha de salida:</label>
                    <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" tabindex="3" readonly
                        value="{{ $salida->fechaSalida }}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tipo salida :</label>
                    <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3" readonly
                        value="$salida->tipoSalida">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Detalles :</label>
                    <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3" readonly
                        value="{{ $salida->detalle }}">
                </div>

                <div>
                    <h3> Datos del animal </h3>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $salida->Animal->nombre }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Especie: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $salida->Animal->TipoAnimal->tipo }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Sexo: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $salida->Animal->sexo }}">
                </div>

                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Raza: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $salida->Animal->raza }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Nombre de la raza:
                        <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                            value="{{ $salida->Animal->nombreRaza }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Procedencia: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $salida->Animal->procedencia }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Fecha de nacimiento: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $salida->Animal->fechaNacimiento }}">
                </div>


                <!-- Dejar estos input invisible solo se necesita para mandar ids -->
                <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{ $salida->Animal->id }}">

                @can('salidaAnimales.index')
                    <a href="/salidaAnimales" class="btn btn-secondary" tabindex="5">Regresar</a>
                @endcan

            </form>
        </div>
    </div>
@endsection
