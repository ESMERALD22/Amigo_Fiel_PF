@extends('layouts.plantillabase')

@section('content')
    <h1><b>
            <center> INFORMACIÓN DE HOGAR TEMPORAL</center>
    </h1>

    <form enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nombre del encargado :</label>
            <input id="nombreEncargado" name="nombreEncargado" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->nombreEncargado }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono 1 :</label>
            <input id="telefono1" name="telefono1" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->telefono1 }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono 2 :</label>
            <input id="telefono2" name="telefono2" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->telefono2 }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Dirección :</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->direccion }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripción del lugar :</label>
            <input id="descripcionLugar" name="descripcionLugar" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->descripcionLugar }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Animales propios :</label>
            <input id="animalesPropios" name="animalesPropios" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->animalesPropios }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Miembros de la familia :</label>
            <input id="miembrosFam" name="miembrosFam" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->miembrosFam }}" readonly>
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Tiempo disponible :</label>
            <input id="tiempoDisponible" name="tiempoDisponible" type="text" class="form-control" tabindex="3"
                value="{{ $hogar->tiempoDisponible }}" readonly>
        </div>

        <a href="/hogares" class="btn-lg btn-primary" tabindex="5">Regresar</a>
        </div>

        
    </form>
@endsection
