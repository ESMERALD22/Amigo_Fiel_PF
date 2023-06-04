@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        EDICIÓN DE INFORMACIÓN DEL ADOPTANTE </h1>
            </div>

            <form action="{{ route('tipoAnimal.update', $tipo->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf


                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Nombre de la especie :</label>
                    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="3" required
                        value="{{ $tipo->tipo }}">
                </div>

                <div>
                    <br />
                </div>

                @can('tipoAnimal.index')
                    <a href="/tipoAnimal" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan
                @can('tipoAnimal.edit')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan

            </form>
        </div>
    </div>
@endsection
