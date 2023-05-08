@extends('layouts.plantillabase')

@section('content')
<h1>VISTA CREATE HOGAR</h1>

<form action="{{ route('hogares.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre del Encargado </label>
        <input id="nombreEncargado" name="nombreEncargado" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono 1</label>
        <input id="telefono1" name="telefono1" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono 2</label>
        <input id="telefono2" name="telefono2" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion del lugar</label>
        <input id="descripcionLugar" name="descripcionLugar" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Animales propios</label>
        <input id="animalesPropios" name="animalesPropios" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Miembros de la familia</label>
        <input id="miembrosFam" name="miembrosFam" type="text" class="form-control" tabindex="3">
    </div>


    <div class="mb-3">
        <label for="" class="form-label">Tiempo disponible</label>
        <input id="tiempoDisponible" name="tiempoDisponible" type="text" class="form-control" tabindex="3">
    </div>

    <a href="/animales" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection