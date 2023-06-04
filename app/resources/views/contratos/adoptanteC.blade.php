@extends('layouts.plantillabase')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Error en campos, por favor verifique la información.</h6>
        </div>
    @endif

    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        INFORMACIÓN DEL ADOPTANTE
            </div>

            <form action="{{ route('contratos.create') }}" method="GET" enctype="multipart/form-data">


                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Ingrese DPI del adoptante</label>
                    <input id="dpi" name="dpi" type="text" class="form-control" tabindex="3" required>
                    @if ($errors->has('dpi'))
                        <p class="alert alert-danger">Ingrese DPI de adoptante existente en el sistema </p>
                    @endif
                </div>
                <!-- Dejar este input invisible solo se necesita para mandar id -->
                <input type="hidden" id="id" name="id" type="text" value="{{ $id }}">

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" tabindex="4">Siguiente</button>
                </div>
            </form>
        </div>
    </div>
@endsection
