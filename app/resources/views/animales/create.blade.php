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
                <h1><b> REGISTRO DE ANIMAL
                </h1>
            </div>

            <form action="{{ route('animales.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Sexo :</label>
                        <select name="sexo">
                            <option value="Hembra">Hembra</option>
                            <option value="Macho">Macho</option>
                        </select>
                        @if ($errors->has('sexo'))
                            <p class="alert alert-danger">Ingrese nombre por favor </p>
                        @endif
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Especie :</label>
                        <select name="idTipoAnimal">
                            @foreach ($tiposAnimales as $tipo1)
                                {
                                <option value="{{ $tipo1->id }}"> {{ $tipo1->tipo }}</option>
                                }
                            @endforeach
                        </select>
                        @if ($errors->has('idTipoAnimal'))
                            <p class="alert alert-danger">Ingrese nombre por favor </p>
                        @endif
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Raza :</label>
                        <select name="raza">
                            <option value="Raza"> Raza</option>
                            <option value="Mestizo">Mestizo</option>
                        </select>
                        @if ($errors->has('raza'))
                            <p class="alert alert-danger">Ingrese nombre por favor </p>
                        @endif
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Nombre de la raza :</label>
                        <input id="nombreRaza" name="nombreRaza" type="text" class="form-control" tabindex="3"
                            required value={{ old('nombreRaza') }}>
                        @if ($errors->has('nombreRaza'))
                            <p class="alert alert-danger">Ingrese nombre por favor </p>
                        @endif
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Nombre del animal :</label>
                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3" required value={{ old('nombre') }}>
                    @if ($errors->has('nombre'))
                        <p class="alert alert-danger">Ingrese nombre por favor </p>
                    @endif
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Fecha de nacimiento:</label>
                        <input id="fechaNacimiento" name="fechaNacimiento" type="date" class="form-control"
                            tabindex="3" value={{ old('fechaNacimiento') }}>
                        @if ($errors->has('fechaNacimiento'))
                            <p class="alert alert-danger">Ingrese nombre por favor </p>
                        @endif
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Edad :</label>
                        <input id="edad" name="edad" type="text" class="form-control" tabindex="3" required value={{ old('edad') }}>
                        @if ($errors->has('edad'))
                            <p class="alert alert-danger">Ingrese nombre por favor </p>
                        @endif
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Descripción :</label>
                    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" required value={{ old('descripcion') }}>
                    @if ($errors->has('descripcion'))
                        <p class="alert alert-danger">Ingrese nombre por favor </p>
                    @endif
                </div>


                <div class="grid grid-cols-1 mt-5 mx-7">
                    <img id="imagenSeleccionada" style="max-block-size: 300px;">
                </div>

                <div class="form-group">
                    <label for="" class="formbold-form-label">Fotografía :</label>
                    <input type="file" id="foto" name="foto" class="hidden" required >
                    @if ($errors->has('foto'))
                        <p class="alert alert-danger">Ingrese nombre por favor </p>
                    @endif
                </div>

                <a href="/animales" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

                <div><br />
                </div>

            </form>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e) {
        $('#foto').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
