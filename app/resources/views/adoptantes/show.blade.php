@extends('layouts.plantillabase')

@section('content')
    <h1><b>
            <center> INFORMACIÓN DE ADOPTANTE</center>
    </h1>

    <form enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nombre :</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3"
                value="{{ $adoptante->nombre }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido :</label>
            <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3"
                value="{{ $adoptante->apellido }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">DPI :</label>
            <input id="dpi" name="dpi" type="text" class="form-control" tabindex="3"
                value="{{ $adoptante->dpi }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono 1 :</label>
            <input id="telefono1" name="telefono1" type="text" class="form-control" tabindex="3"
                value="{{ $adoptante->telefono1 }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono 2 :</label>
            <input id="telefono2" name="telefono2" type="text" class="form-control" tabindex="3"
                value="{{ $adoptante->tlefno2 }}" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Correo electrónico :</label>
            <input id="correo" name="correo" type="text" class="form-control" tabindex="3"
                value="{{ $adoptante->correo }}" readonly>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dirección :</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3"
                value="{{ $adoptante->direccion }}" readonly>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Otros detalles :</label>
            <input id="detalles" name="detalles" type="text" class="form-control" tabindex="3"
                value="{{ $adoptante->detalles }}" readonly>
        </div>

        <div>
            <a href="/animales" class="btn btn-secondary" tabindex="5">Regresar</a>
        </div>

        <div>
            <br />
        </div>
    </form>
@endsection
