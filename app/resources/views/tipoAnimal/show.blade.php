@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        INFORMACIÓN DE LA ESPECIE </h1>
            </div>

            <form enctype="multipart/form-data">
                @csrf


                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Nombre de la especie :</label>
                    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="3" readonly
                        value="{{ $tipo->tipo }}">
                </div>

                <div>
                    <br />
                </div>

                @can('tipoAnimal.index')
                    <a href="/tipoAnimal" class="btn btn-secondary" tabindex="5">Regresar</a>
                @endcan
            </form>
        </div>
    </div>
@endsection
