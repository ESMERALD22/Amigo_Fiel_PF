@extends('layouts.plantillabase')

@section('content')
    <h1><b>
            <center> REGISTRO DE ADOPTANTE</center>
    </h1>

    <form action="{{ route('adoptantes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nombre :</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido :</label>
            <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">DPI :</label>
            <input id="dpi" name="dpi" type="text" class="form-control" tabindex="3" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono 1 :</label>
            <input id="telefono1" name="telefono1" type="number" class="form-control" tabindex="3" maxlength="8"
                required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono 2 :</label>
            <input id="telefono2" name="telefono2" type="number" class="form-control" tabindex="3" maxlength="8"
                required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Correo electrónico :</label>
            <input id="correo" name="correo" type="email" class="form-control" tabindex="3" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Dirección :</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Otros detalles :</label>
            <input id="detalles" name="detalles" type="text" class="form-control" tabindex="3" required>
        </div>

        <a href="/animales" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </div>

        <div>
            <br />
        </div>
    </form>
@endsection
