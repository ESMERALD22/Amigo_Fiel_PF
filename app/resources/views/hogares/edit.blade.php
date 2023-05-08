@extends('layouts.plantillabase')

@section('content')
<h1>EDICIÓN DE INFORMACIÓN DE HOGAR TEMPORAL </h1>

<form action="{{ route('hogares.update',$hogar->id)}}" method="POST" enctype="multipart/form-data" >
@method('PUT')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre del encargado :</label>
        <input id="nombreEncargado" name="nombreEncargado" type="text" class="form-control" tabindex="3" 
        value="{{$hogar->nombreEncargado}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Teléfono 1 :</label>
        <input id="telefono1" name="telefono1" type="text" class="form-control" tabindex="3"
        value="{{$hogar->telefono1}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Teléfono 2 :</label>
        <input id="telefono2" name="telefono2" type="text" class="form-control" tabindex="3"
        value="{{$hogar->telefono2}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Dirección :</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3"
        value="{{$hogar->direccion}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripción del lugar :</label>
        <input id="descripcionLugar" name="descripcionLugar" type="text" class="form-control" tabindex="3"
        value="{{$hogar->descripcionLugar}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Animales propios :</label>
        <input id="animalesPropios" name="animalesPropios" type="text" class="form-control" tabindex="3"
        value="{{$hogar->animalesPropios}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Miembros de la familia :</label>
        <input id="miembrosFam" name="miembrosFam" type="text" class="form-control" tabindex="3"
        value="{{$hogar->miembrosFam}}">
    </div>


    <div class="mb-3">
        <label for="" class="form-label">Tiempo disponible :</label>
        <input id="tiempoDisponible" name="tiempoDisponible" type="text" class="form-control" tabindex="3"
        value="{{$hogar->tiempoDisponible}}">
    </div>

    <a href="/hogares" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection
