@extends('layouts.plantillabase')

@section('content')
<h1>VISTA EDIT Adoptante</h1>

<form action="{{ route('adoptantes.update', $adoptante->id) }}"  method="POST" enctype="multipart/form-data" >
@method('PUT')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre </label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3" value="{{$adoptante->nombre}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3" value="{{$adoptante->apellido}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">DPI</label>
        <input id="dpi" name="dpi" type="text" class="form-control" tabindex="3" value="{{$adoptante->dpi}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono 1</label>
        <input id="telefono1" name="telefono1" type="text" class="form-control" tabindex="3" value="{{$adoptante->telefono1}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono 2</label>
        <input id="telefono2" name="telefono2" type="text" class="form-control" tabindex="3" value="{{$adoptante->tlefno2}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="text" class="form-control" tabindex="3" value="{{$adoptante->correo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3" value="{{$adoptante->direccion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Otros detalles</label>
        <input id="detalles" name="detalles" type="text" class="form-control" tabindex="3" value="{{$adoptante->detalles}}">
    </div>


    <a href="/animales" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

@endsection