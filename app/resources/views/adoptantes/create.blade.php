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
                <h1><b>REGISTRO DE ADOPTANTE
            </div>


            <form action="{{ route('adoptantes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="formbold-input-flex">

                    <div>
                        <label for="" class="formbold-form-label">Nombre :</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3" required
                            value="{{ old('nombre') }}">
                        @if ($errors->has('nombre'))
                            <p class="alert alert-danger">Ingrese nombre por favor </p>
                        @endif
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Apellido :</label>
                        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3" required
                            value="{{ old('apellido') }}">
                        @if ($errors->has('apellido'))
                            <p class="alert alert-danger">Ingrese apellido por favor </p>
                        @endif
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">DPI :</label>
                    <input id="dpi" name="dpi" type="text" class="form-control" tabindex="3" required
                        value="{{ old('dpi') }}">
                    @if ($errors->has('dpi'))
                        <p class="alert alert-danger">Ingrese DPI por favor </p>
                    @endif
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Teléfono 1 :</label>
                        <input id="telefono1" name="telefono1" type="number" class="form-control" tabindex="3"
                            maxlength="8" required value="{{ old('telefono1') }}">
                        @if ($errors->has('telefono1'))
                            <p class="alert alert-danger">Ingrese teléfono </p>
                        @endif
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Teléfono 2 :</label>
                        <input id="telefono2" name="telefono2" type="number" class="form-control" tabindex="3"
                            maxlength="8" required value="{{ old('telefono2') }}">
                        @if ($errors->has('telefono2'))
                            <p class="alert alert-danger">Ingrese teléfono </p>
                        @endif
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Correo electrónico :</label>
                    <input id="correo" name="correo" type="email" class="form-control" tabindex="3" required
                        value="{{ old('correo') }}">
                    @if ($errors->has('correo'))
                        <p class="alert alert-danger">Ingrese correo </p>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Dirección :</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3" required
                        value="{{ old('direccion') }}">
                    @if ($errors->has('direccion'))
                        <p class="alert alert-danger">Ingrese direccion </p>
                    @endif
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Otros detalles :</label>
                    <input id="detalles" name="detalles" type="text" class="form-control" tabindex="3" required
                        value="{{ old('detalles') }}">
                    @if ($errors->has('detalles'))
                        <p class="alert alert-danger">Ingrese detalles </p>
                    @endif
                </div>

                <a href="/adoptantes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

                <div>
                    <br />
                </div>
            </form>
        </div>
    </div>
@endsection
