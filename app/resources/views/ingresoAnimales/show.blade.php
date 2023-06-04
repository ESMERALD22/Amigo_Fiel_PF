@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        INFORMACIÓN DE INGRESO DE ANIMALES </h1>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Fecha de ingreso del animal :</label>
                <input id="fechaIngreso" name="fechaIngreso" type="date" class="form-control" readonly
                    value="{{ $ingreso->fechaIngreso }}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Procedencia :</label>
                <input id="procedencia" name="procedencia" type="text" class="form-control" readonly
                    value="{{ $ingreso->procedencia }}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Otros detalles :</label>
                <input id="detalle" name="detalle" type="text" class="form-control" readonly
                    value="{{ $ingreso->detalle }}">
            </div>

            <div>
                <h3> Datos del hogar temporal </h3>
            </div>

            <div class="mb-3">
                <label for="" class="formbold-form-label"> Nombre del encargado:
                </label>
                <input id="hogar1" name="hogar1" type="text" class="form-control" readonly
                    value="{{ $hogar->nombreEncargado }}" readonly>
            </div>

            <div class="mb-3">
                <label for="" class="formbold-form-label"> Dirección : </label>
                <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                    value="{{ $hogar->direccion }}">
            </div>
            <div>
                <h3> Datos del animal </h3>
            </div>
            <div class="mb-3">
                <label for="" class="formbold-form-label"> Nombre:</label>
                <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                    value="{{ $animal->nombre }}">
            </div>
            <div class="mb-3">
                <label for="" class="formbold-form-label"> Especie: {{ $animal->TipoAnimal->tipo }} </label>
                <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                    value="{{ $animal->TipoAnimal->tipo }}">
            </div>
            <div class="mb-3">
                <label for="" class="formbold-form-label"> Sexo: </label>
                <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                    value="{{ $animal->sexo }}">
            </div>

            <div class="mb-3">
                <label for="" class="formbold-form-label"> Raza: </label>
                <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                    value="{{ $animal->raza }}">
            </div>
            <div class="mb-3">
                <label for="" class="formbold-form-label"> Nombre de la raza:
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $animal->nombreRaza }}">
            </div>
            <div class="mb-3">
                <label for="" class="formbold-form-label"> Procedencia: </label>
                <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                    value="{{ $animal->procedencia }}">
            </div>

            <!-- Dejar estos input invisible solo se necesita para mandar ids -->
            <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{ $animal->id }}">
            <input type="hidden" id="idHogar" name="idHogar" type="text" value="{{ $hogar->id }}">

            @can('ingresoAnimales.index')
                <a href="/ingresoAnimales" class="btn btn-secondary">Regresar</a>
            @endcan
        </div>
    </div>
@endsection
