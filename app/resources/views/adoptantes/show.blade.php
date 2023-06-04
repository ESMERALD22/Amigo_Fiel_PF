@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        INFORMACIÓN DE ADOPTANTE
                </h1>
            </div>

            <form enctype="multipart/form-data">
                @csrf

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Nombre :</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3"
                            value="{{ $adoptante->nombre }}" readonly>
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Apellido :</label>
                        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3"
                            value="{{ $adoptante->apellido }}" readonly>
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">DPI :</label>
                    <input id="dpi" name="dpi" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->dpi }}" readonly>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Teléfono 1 :</label>
                        <input id="telefono1" name="telefono1" type="text" class="form-control" tabindex="3"
                            value="{{ $adoptante->telefono1 }}" readonly>
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 2 :</label>
                        <input id="telefono2" name="telefono2" type="text" class="form-control" tabindex="3"
                            value="{{ $adoptante->telefono2 }}" readonly>
                    </div>
                </div>
                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Correo electrónico :</label>
                    <input id="correo" name="correo" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->correo }}" readonly>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Dirección :</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->direccion }}" readonly>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Otros detalles :</label>
                    <input id="detalles" name="detalles" type="text" class="form-control" tabindex="3"
                        value="{{ $adoptante->detalles }}" readonly>
                </div>

                <div>
                    @can('adoptantes.index')
                        <a href="/adoptantes" class="btn btn-secondary" tabindex="5">Regresar</a>
                    @endcan
                </div>

                <div>
                    <br />
                </div>
            </form>
        </div>
    </div>
@endsection
