@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        EDITAR INFORMACIÓN DE HOGAR TEMPORAL
                </h1>
            </div>


            <form action="{{ route('hogares.update', $hogar->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Nombre del propietario :</label>
                    <input id="nombreEncargado" name="nombreEncargado" type="text" class="form-control" tabindex="3"
                        value="{{ $hogar->nombreEncargado }}" required>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Teléfono 1 :</label>
                        <input id="telefono1" name="telefono1" type="number" class="form-control" tabindex="3"
                            value="{{ $hogar->telefono1 }}"  required>
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 2 :</label>
                        <input id="telefono2" name="telefono2" type="number" class="form-control" tabindex="3"
                            value="{{ $hogar->telefono2 }}"  required>
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Dirección :</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3"
                        value="{{ $hogar->direccion }}" required>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Descripción del lugar :</label>
                    <input id="descripcionLugar" name="descripcionLugar" type="text" class="form-control" tabindex="3"
                        value="{{ $hogar->descripcionLugar }}" required>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Animales propios :</label>
                    <input id="animalesPropios" name="animalesPropios" type="text" class="form-control" tabindex="3"
                        value="{{ $hogar->animalesPropios }}" required>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Miembros de la familia :</label>
                    <input id="miembrosFam" name="miembrosFam" type="text" class="form-control" tabindex="3"
                        value="{{ $hogar->miembrosFam }}" required>
                </div>


                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Tiempo disponible :</label>
                    <input id="tiempoDisponible" name="tiempoDisponible" type="text" class="form-control" tabindex="3"
                        value="{{ $hogar->tiempoDisponible }}" required>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-6">
                        <a href="/hogares" class="btn  btn-primary " tabindex="4"> Cancelar</a>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <button type="submit" class="btn btn-success "><i class="fa fa-save" tabindex="4">
                                Guardar</i></a>
                    </div>
                </div>

                <div class="mb-3">
                    <br />
                </div>

            </form>
        </div>
    </div>
@endsection
