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
                <h1><b>REGISTRO DE ESPECIE
            </div>


            <form action="{{ route('tipoAnimal.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Nombre de la especie :</label>
                    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="3" required>
                    @if ($errors->has('tipo'))
                        <p class="alert alert-danger">Ingrese tipo </p>
                    @endif
                </div>

                <div>
                    <br />
                </div>


                @can('tipoAnimal.idndex')
                    <a href="/tipoAnimal" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan
                @can('tipoAnimal.create')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan
            </form>
        </div>
    </div>
@endsection
