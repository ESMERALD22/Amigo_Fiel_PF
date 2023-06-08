@extends('layouts.plantillabase')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Error en campos, por favor verifique la información.</h6>
        </div>
    @endif

    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        CREACIÓN DEL CONTRATO</h1>
            </div>


            <form action="{{ route('contratos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                    <h3> Fecha : </h3>
                    <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" tabindex="3" required
                        value="{{ old('fechaSalida') }}">
                    @if ($errors->has('fechaSalida'))
                        <p class="alert alert-danger">Seleccione fecha de salida</p>
                    @endif
                </div>

                <div>
                    <h3> Lugar : </h3>
                    <input id="lugar" name="lugar" type="text" class="form-control" tabindex="3" required
                        value="{{ old('lugar') }}">
                    @if ($errors->has('lugar'))
                        <p class="alert alert-danger">Ingrese lugar</p>
                    @endif
                </div>

                <div>
                    <h3> Datos del adoptante </h3>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $adoptante->nombre }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> DPI:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $adoptante->dpi }}">
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Teléfono 1:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $adoptante->telefono1 }}">
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Teléfono 2:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $adoptante->telefono2 }}">
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Correo electrónico:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $adoptante->correo }}">
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Domicilio:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $adoptante->direccion }}">
                </div>

                <div>
                    <h3> Datos del representante de la asoción </h3>
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ Auth::user()->name }}">
                </div>

                <div>
                    <h3> Datos de la mascota </h3>
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
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Fecha de nacimiento: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $animal->fechaNacimiento }}">
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Edad: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value="{{ $animal->edad }}">
                </div>

                <div>
                    <label for="" class="form-label"> Observaciones : </label>
                    <input id="observacion" name="observacion" type="text" class="form-control" tabindex="3"
                        required value="{{ old('observacion') }}">
                    @if ($errors->has('observacion'))
                        <p class="alert alert-danger">Ingrese observaciones </p>
                    @endif
                </div>

                <!-- Dejar estos input invisible solo se necesita para mandar ids -->
                <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{ $animal->id }}">
                <input type="hidden" id="idSocio" name="idSocio" type="text" value="{{ Auth::user()->id }}">
                <input type="hidden" id="idAdoptante" name="idAdoptante" type="text" value="{{ $adoptante->id }}">
                <input type="hidden" id="estado" name="estado" type="text" value="valido">



                @can('contratos.create')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan
                @can('contratos.index')
                    <a href="/contratos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan
            </form>
        </div>
    </div>
@endsection
