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
                        REGISTRO MÉDICO
                </h1>
            </div>

            <form action="{{ route('registrosMedicos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Fecha :</label>
                    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3" required
                        value="{{ old('fecha') }}">
                    @if ($errors->has('fecha'))
                        <p class="alert alert-danger">Ingrese fecha </p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tratamiento aplicado:</label>
                    <input id="tratamiento" name="tratamiento" type="text" class="form-control" tabindex="3" required
                        value="{{ old('tratamiento') }}">
                    @if ($errors->has('tratamiento'))
                        <p class="alert alert-danger">Ingrese tratamiento </p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Descripción :</label>
                    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" required
                        value="{{ old('descripcion') }}">
                    @if ($errors->has('descripcion'))
                        <p class="alert alert-danger">Ingrese descripcion </p>
                    @endif
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
                        value={{ $animal->TipoAnimal->tipo }}>
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
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Fecha de nacimiento: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $animal->fechaNacimiento }}">
                </div>


                <!-- Dejar estos input invisible solo se necesita para mandar ids -->
                <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{ $animal->id }}">

                @can('registrosMedicos.index')
                    <a href="/registrosMedicos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan
                @can('registrosMedicos.create')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan

            </form>
        </div>
    </div>
@endsection
