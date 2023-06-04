@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <form enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="formbold-form-title">
                    <h1><b>
                            INFORMACIÓN DE HOGAR TEMPORAL
                    </h1>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Nombre del propietario :</label>
                    <input id="nombreEncargado" name="nombreEncargado" type="text" class="formbold-form-input"
                        tabindex="3" value="{{ $hogar->nombreEncargado }}" readonly>
                </div>

                <div class="formbold-input-flex">
                    <div> <label for="" class="formbold-form-label">Teléfono 1 :</label>
                        <input id="telefono1" name="telefono1" type="text" class="formbold-form-input" tabindex="3"
                            value="{{ $hogar->telefono1 }}" readonly>
                    </div>

                    <div class="formbold-mb-3">
                        <label for="" class="formbold-form-label">Teléfono 2 :</label>
                        <input id="telefono2" name="telefono2" type="text" class="formbold-form-input" tabindex="3"
                            value="{{ $hogar->telefono2 }}" readonly>
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label"> Dirección :</label>
                    <input id="direccion" name="direccion" type="text" class="formbold-form-input"tabindex="3"
                        value="{{ $hogar->direccion }}" readonly>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Descripción del lugar :</label>
                    <input id="descripcionLugar" name="descripcionLugar" type="text" class="formbold-form-input"
                        tabindex="3" value="{{ $hogar->descripcionLugar }}" readonly>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Animales propios :</label>
                    <input id="animalesPropios" name="animalesPropios" type="text"
                        class="formbold-form-input"tabindex="3" value="{{ $hogar->animalesPropios }}" readonly>
                </div>

                <div class="formbold-mb-3">
                    <label for=""class="formbold-form-label">Miembros de la familia :</label>
                    <input id="miembrosFam" name="miembrosFam" type="text" class="formbold-form-input" tabindex="3"
                        value="{{ $hogar->miembrosFam }}" readonly>
                </div>


                <div class="formbold-mb-3">
                    <label for=""class="formbold-form-label">Tiempo disponible :</label>
                    <input id="tiempoDisponible" name="tiempoDisponible" type="text" class="formbold-form-input"
                        tabindex="3" value="{{ $hogar->tiempoDisponible }}" readonly>
                </div>
                @can('hogares.index')
                    <a href="/hogares" class="btn-lg btn-primary" tabindex="5">Regresar</a>
                @endcan
            </form>
        </div>
    </div>
@endsection
