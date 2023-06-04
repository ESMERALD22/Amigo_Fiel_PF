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
                        REGISTRO DE HOGAR TEMPORAL
                </h1>
            </div>


            <form action="{{ route('hogares.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Nombre del propietario :</label>
                    <input id="nombreEncargado" name="nombreEncargado" type="text" class="form-control" tabindex="3"
                        required value="{{ old('nombreEncargado') }}">
                    @if ($errors->has('nombreEncargado'))
                        <p class="alert alert-danger">Ingrese nombre por favor </p>
                    @endif
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Teléfono 1 :</label>
                        <input id="telefono1" name="telefono1" type="number" class="form-control" tabindex="3" required
                            value="{{ old('telefono1') }}">
                        @if ($errors->has('telefono1'))
                            <p class="alert alert-danger">Ingrese un número de teléfono válido </p>
                        @endif
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 2 :</label>
                        <input id="telefono2" name="telefono2" type="number" class="form-control" tabindex="3" required
                            value="{{ old('telefono2') }}">
                        @if ($errors->has('telefono2'))
                            <p class="alert alert-danger">Ingrese un número de teléfono válido </p>
                        @endif
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Dirección :</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3" required
                        value="{{ old('direccion') }}">
                    @if ($errors->has('direccion'))
                        <p class="alert alert-danger">Ingrese dirección</p>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Descripción del lugar :</label>
                    <input id="descripcionLugar" name="descripcionLugar" type="text" class="form-control" tabindex="3"
                        required value="{{ old('descripcionLugar') }}">
                    @if ($errors->has('descripcionLugar'))
                        <p class="alert alert-danger">Llene este campo </p>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Animales propios :</label>
                    <input id="animalesPropios" name="animalesPropios" type="text" class="form-control" tabindex="3"
                        required value="{{ old('animalesPropios') }}">
                    @if ($errors->has('animalesPropios'))
                        <p class="alert alert-danger">Llene este campo </p>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Miembros de la familia :</label>
                    <input id="miembrosFam" name="miembrosFam" type="text" class="form-control" tabindex="3" required
                        value="{{ old('miembrosFam') }}">
                    @if ($errors->has('miembrosFam'))
                        <p class="alert alert-danger">Llene este campo </p>
                    @endif
                </div>


                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Tiempo disponible :</label>
                    <input id="tiempoDisponible" name="tiempoDisponible" type="text" class="form-control" tabindex="3"
                        required value="{{ old('tiempoDisponible') }}">
                    @if ($errors->has('tiempoDisponible'))
                        <p class="alert alert-danger">Llene este campo </p>
                    @endif
                </div>
                @can('hogares.index')
                    <a href="/hogares" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan
                @can('hogares.create')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan
                <div>
                    <br />
                </div>
            </form>
        </div>
    </div>
@endsection
