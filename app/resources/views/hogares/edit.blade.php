@extends('layouts.plantillabase')

@section('content')
    <h1><b>
            <center> EDITAR INFORMACIÓN DE HOGAR TEMPORAL</center>
    </h1>

    <form action="{{ route('hogares.update', $hogar->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nombre del encargado :</label>
            <input id="nombreEncargado" name="nombreEncargado" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->nombreEncargado }}" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono 1 :</label>
            <input id="telefono1" name="telefono1" type="number" class="form-control" tabindex="3"
                value="{{ $hogar->telefono1 }}" maxlength="8" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono 2 :</label>
            <input id="telefono2" name="telefono2" type="number" class="form-control" tabindex="3"
                value="{{ $hogar->telefono2 }}" maxlength="8" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Dirección :</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->direccion }}" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripción del lugar :</label>
            <input id="descripcionLugar" name="descripcionLugar" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->descripcionLugar }}" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Animales propios :</label>
            <input id="animalesPropios" name="animalesPropios" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->animalesPropios }}" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Miembros de la familia :</label>
            <input id="miembrosFam" name="miembrosFam" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->miembrosFam }}" required>
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Tiempo disponible :</label>
            <input id="tiempoDisponible" name="tiempoDisponible" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->tiempoDisponible }}" required>
        </div>

        <div class="row">
            <div class="col-md-2 col-xs-6">
                <a href="/hogares" class="btn  btn-primary "  tabindex="4">  Cancelar</a>
            </div>
            <div class="col-md-2 col-xs-6">
                <button type="submit" class="btn btn-success "><i class="fa fa-save" tabindex="4"> Guardar</i></a>
            </div>
        </div>

        <div class="mb-3">
            <br/>
        </div>

    </form>
@endsection
