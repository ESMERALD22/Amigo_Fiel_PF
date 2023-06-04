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
                        SALIDAS DE ANIMALES
                </h1>
            </div>

            <form action="{{ route('salidaAnimales.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Fecha de salida :</label>
                    <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" tabindex="3" required
                        value={{ old('fechaSalida') }}>

                    @if ($errors->has('fechaSalida'))
                        <p class="alert alert-danger">Ingrese fecha </p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tipo de salida :</label>
                    <select name="tipoSalida">
                        <option value="Adopción">Adopción</option>
                        <option value="Retorno a su hogar">Retorno a su hogar</option>
                        <option value="Muerte">Muerte</option>
                        <option value="Otro">Otro</option>
                    </select>
                    @if ($errors->has('tipoSalida'))
                        <p class="alert alert-danger">Seleccione tipo de salida</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Detalles :</label>
                    <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3" required
                        value={{ old('detalle') }}>

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
                        value={{ $animal->nombre }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Especie: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $animal->TipoAnimal->tipo }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Sexo: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $animal->sexo }}>
                </div>

                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Raza: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $animal->raza }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Nombre de la raza:
                        <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                            value={{ $animal->nombreRaza }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Procedencia: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $animal->procedencia }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Fecha de nacimiento: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $animal->fechaNacimiento }}>
                </div>

                <!-- Dejar estos input invisible solo se necesita para mandar ids -->
                <input type="hidden" id="idAnimal" name="idAnimal" type="text" value="{{ $animal->id }}">

                <div>
                    @can('salidaAnimales.index')
                        <a href="/animales" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    @endcan
                    @can('salidaAnimales.create')
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                    @endcan
                </div>


            </form>
        </div>
    </div>
@endsection
