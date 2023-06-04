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

                        EDICIÓN DE REGISTRO DE SALIDA DE ANIMAL
                </h1>
            </div>

            <form action="{{ route('salidaAnimales.update', $salida->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Fecha de salida:</label>
                    <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" tabindex="3" required
                        value="{{ $salida->fechaSalida }}">
                    @if ($errors->has('fechaSalida'))
                        <p class="alert alert-danger">Ingrese fecha </p>
                    @endif
                </div>



                <div class="mb-3">
                    <label for="" class="form-label">Tipo de salida :</label>
                    <select name="tipoSalida">
                        @foreach ($tiposSalida as $tipo1)
                            {
                            @if ($salida->tipoSalida == $tipo1)
                                <option value="{{ $tipo1 }}" selected> {{ $tipo1 }}</option>
                            @else
                                <option value="{{ $tipo1 }}"> {{ $tipo1 }}</option>
                            @endif
                            }
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Detalles :</label>
                    <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3" required
                        value="{{ $salida->detalle }}">
                    @if ($errors->has('detalle'))
                        <p class="alert alert-danger">Ingrese detalle </p>
                    @endif
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
                    <label for="" class="formbold-form-label"> Fecha de nacimiento: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $salida->Animal->fechaNacimiento }}">
                </div>


                <!-- Dejar estos input invisible solo se necesita para mandar ids -->
                <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{ $salida->Animal->id }}">

                @can('salidaAnimales.index')
                    <a href="/salidaAnimales" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan
                @can('salidaAnimales.edit')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan

            </form>

        </div>
    </div>
@endsection
