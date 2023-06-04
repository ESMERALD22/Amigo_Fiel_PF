@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        INFORMACIÓN DE: {{ $animal->nombre }}
                </h1>
            </div>



            @can('animales.index')
                <a href="/animales" class="btn btn-secondary" tabindex="5">Regresar</a>
            @endcan

            @can('registrosMedicos.index')
                <a href="/registros/{{ $animal->id }}" class="btn btn-info">Ver registros médicos</a>
            @endcan
            
            @can('ingresoAnimales.index')
                <a href="/hogaresA/{{ $animal->id }}" class="btn btn-info">Ver hogares temporal</a>
            @endcan
            @can('contratos.index')
                <a href="/contratoA/{{ $animal->id }}" class="btn btn-info">Ver contratos de adopción</a>
            @endcan


            <form enctype="multipart/form-data">
                @csrf
                <br />

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Nombre del animal :</label>
                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3"
                        value="{{ $animal->nombre }}" readonly>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Sexo :</label>
                        <input id="nombreRaza" name="nombreRaza" type="text" class="form-control" tabindex="3"
                            value="{{ $animal->sexo }}" readonly>
                    </div>


                    <div>
                        <label for="" class="formbold-form-label">Especie :</label>
                        <input id="nombreRaza" name="nombreRaza" type="text" class="form-control" tabindex="3"
                            value="{{ $animal->TipoAnimal->tipo }}" readonly>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Raza :</label>
                        <input id="nombreRaza" name="nombreRaza" type="text" class="form-control" tabindex="3"
                            value="{{ $animal->raza }}" readonly>
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Nombre de la raza :</label>
                        <input id="nombreRaza" name="nombreRaza" type="text" class="form-control" tabindex="3"
                            value="{{ $animal->nombreRaza }}" readonly>
                    </div>
                </div>


                <div class="formbold-input-flex">
                    <div>
                        <label for="" class="formbold-form-label">Fecha de nacimiento :</label>
                        <input id="fechaNacimiento" name="fechaNacimiento" type="date" class="form-control"
                            tabindex="3" value="{{ $animal->fechaNacimiento }}" readonly>
                    </div>

                    <div>
                        <label for="" class="formbold-form-label">Edad :</label>
                        <input id="edad" name="edad" type="text" class="form-control" tabindex="3"
                            value="{{ $animal->edad }}" readonly>
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Descripción :</label>
                    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3"
                        value="{{ $animal->descripcion }}" readonly>
                </div>


                <div class="formbold-mb-3">
                    <label for="" class="formbold-form-label">Fotografía :</label>

                    <img id="imagenSeleccionada" src="{{ asset('uploads/animales/' . $animal->foto) }}" width="200px">
                </div>


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
