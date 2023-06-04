@extends('layouts.plantillabase')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Error en campos, por favor verifique la información:</h6>
        </div>
    @endif

    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        INGRESO DE ANIMALES </h1>
            </div>


            <form action="{{ route('ingresoAnimales.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Fecha de ingreso del animal :</label>
                    <input id="fechaIngreso" name="fechaIngreso" type="date" class="form-control" required
                        value="{{ old('fechaIngreso') }}">
                    @if ($errors->has('fechaIngreso'))
                        <p class="alert alert-danger">Ingrese fecha </p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Procedencia :</label>
                    <input id="procedencia" name="procedencia" type="text" class="form-control" required
                        value="{{ old('procedencia') }}">
                    @if ($errors->has('procedencia'))
                        <p class="alert alert-danger">Ingrese Procedencia </p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Otros detalles :</label>
                    <input id="detalle" name="detalle" type="text" class="form-control" required
                        value="{{ old('detalle') }}">
                    @if ($errors->has('detalle'))
                        <p class="alert alert-danger">Ingrese detalles </p>
                    @endif
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
                    <label for="" class="formbold-form-label"> Especie: </label>
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
                

                <!-- Dejar estos input invisible solo se necesita para mandar ids -->
                <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{ $animal->id }}">
                <input type="hidden" id="idHogar" name="idHogar" type="text" value="{{ $hogar->id }}">

                @can('ingresoAnimales.index')
                    <a href="/ingresoAnimales" class="btn btn-secondary">Cancelar</a>
                @endcan
                @can('ingresoAnimales.create')
                    <button type="submit" class="btn btn-primary">Guardar</button>
                @endcan
            </form>

        </div>
    </div>
@endsection
