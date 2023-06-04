@extends('layouts.plantillabase')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Error en campos, por favor verifique la información:</h6>
        </div>
    @endif

    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        EDICIÓN DE INFORMACIÓN DEL ADOPTANTE </h1>
            </div>

            <form action="{{ route('adoptantes.update', $adoptante->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Nombre :</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3"
                            value="{{ $adoptante->nombre }}" required>
                        @if ($errors->has('nombre'))
                            <p class="alert alert-danger">Ingrese nombre por favor </p>
                        @endif
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Apellido :</label>
                        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3"
                            value="{{ $adoptante->apellido }}" required>
                        @if ($errors->has('apellido'))
                            <p class="alert alert-danger">Ingrese apellido </p>
                        @endif
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">DPI :</label>
                    <input id="dpi" name="dpi" type="number" class="form-control" tabindex="3"
                        value="{{ $adoptante->dpi }}" required>
                    @if ($errors->has('dpi'))
                        <p class="alert alert-danger">Ingrese DPI </p>
                    @endif
                </div>

                <div class="formbold-input-flex">

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 1 :</label>
                        <input id="telefono1" name="telefono1" type="number" maxlength="8" class="form-control"
                            tabindex="3" value="{{ $adoptante->telefono1 }}" required>
                        @if ($errors->has('telefono1'))
                            <p class="alert alert-danger">Ingrese teléfono1 </p>
                        @endif
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 2 :</label>
                        <input id="telefono2" name="telefono2" type="number" maxlength="8" class="form-control"
                            tabindex="3" value="{{ $adoptante->telefono2 }}" required>
                        @if ($errors->has('teléfono2'))
                            <p class="alert alert-danger">Ingrese teléfono 2 </p>
                        @endif
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Correo electrónico :</label>
                    <input id="correo" name="correo" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->correo }}" required>
                    @if ($errors->has('correo'))
                        <p class="alert alert-danger">Ingrese correo </p>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Dirección :</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->direccion }}" required>
                    @if ($errors->has('direccion'))
                        <p class="alert alert-danger">Ingrese direccion </p>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Otros detalles :</label>
                    <input id="detalles" name="detalles" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->detalles }}" required>
                    @if ($errors->has('detalles'))
                        <p class="alert alert-danger">Ingrese detalles </p>
                    @endif
                </div>


                @can('adoptantes.index')
                    <a href="/adoptantes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan
                @can('adoptantes.edit')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan


            </form>
        </div>
    </div>
@endsection
