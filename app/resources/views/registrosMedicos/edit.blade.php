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
                        EDICIÓN DE REGISTRO MÉDICO
                </h1>
            </div>

            <form action="{{ route('registrosMedicos.update', $registro->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Fecha :</label>
                    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3" required
                        value="{{ $registro->fecha }}">
                    @if ($errors->has('fecha'))
                        <p class="alert alert-danger">Ingrese fecha </p>
                    @endif

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tratamiento aplicado: </label>
                    <input id="tratamiento" name="tratamiento" type="text" class="form-control" tabindex="3" required
                        value="{{ $registro->tratamiento }}">
                    @if ($errors->has('tratamiento'))
                        <p class="alert alert-danger">Ingrese tratamiento </p>
                    @endif

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Descripción :</label>
                    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" required
                        value="{{ $registro->descripcion }}">
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
                        value="{{ $registro->Animal->nombre }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Especie: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $registro->Animal->TipoAnimal->tipo }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Sexo: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $registro->Animal->sexo }}">
                </div>

                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Raza: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $registro->Animal->raza }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Nombre de la raza:
                        <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                            value="{{ $registro->Animal->nombreRaza }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Fecha de nacimiento: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $registro->Animal->fechaNacimiento }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Procedencia: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $registro->Animal->procedencia }}">
                </div>
                <!-- Dejar estos input invisible solo se necesita para mandar ids -->
                <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{ $registro->Animal->id }}">


                @can('registrosMedicos.index')
                    <a href="/registrosMedicos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan
                @can('registrosMedicos.edit')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan

            </form>
        </div>
    </div>
@endsection
