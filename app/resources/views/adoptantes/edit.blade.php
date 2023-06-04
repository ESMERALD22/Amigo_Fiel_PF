@extends('layouts.plantillabase')

@section('content')
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
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Apellido :</label>
                        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3"
                            value="{{ $adoptante->apellido }}" required>
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">DPI :</label>
                    <input id="dpi" name="dpi" type="number" class="form-control" tabindex="3"
                        value="{{ $adoptante->dpi }}" required>
                </div>

                <div class="formbold-input-flex">

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 1 :</label>
                        <input id="telefono1" name="telefono1" type="number" maxlength="8" class="form-control"
                            tabindex="3" value="{{ $adoptante->telefono1 }}" required>
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 2 :</label>
                        <input id="telefono2" name="telefono2" type="number" maxlength="8" class="form-control"
                            tabindex="3" value="{{ $adoptante->tlefno2 }}" required>
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Correo electrónico :</label>
                    <input id="correo" name="correo" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->correo }}" required>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Dirección :</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->direccion }}" required>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Otros detalles :</label>
                    <input id="detalles" name="detalles" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->detalles }}" required>
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
