@extends('layouts.plantillabase')

@section('content')
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
                        required>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Teléfono 1 :</label>
                        <input id="telefono1" name="telefono1" type="number" class="form-control" tabindex="3"
                             required>
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 2 :</label>
                        <input id="telefono2" name="telefono2" type="number" class="form-control" tabindex="3"
                             required>
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Dirección :</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3" required>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Descripción del lugar :</label>
                    <input id="descripcionLugar" name="descripcionLugar" type="text" class="form-control" tabindex="3"
                        required>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Animales propios :</label>
                    <input id="animalesPropios" name="animalesPropios" type="text" class="form-control" tabindex="3"
                        required>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Miembros de la familia :</label>
                    <input id="miembrosFam" name="miembrosFam" type="text" class="form-control" tabindex="3" required>
                </div>


                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Tiempo disponible :</label>
                    <input id="tiempoDisponible" name="tiempoDisponible" type="text" class="form-control" tabindex="3"
                        required>
                </div>

                <a href="/hogares" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

                <div>
                    <br />
                </div>
            </form>
        </div>
    </div>
@endsection
