@extends('layouts.plantillabase')

@section('content')
<h1>VISTA EDIT ANIMALES</h1>

<form action="{{ route('animales.update', $animal->id) }}"  method="POST" enctype="multipart/form-data" >
@method('PUT')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">SEXO*</label>
        <select name="sexo">
            @if($animal->sexo == 'Hembra')
            <option value="Hembra" selected>Hembra</option>
            @endif
            <option value="Hembra" >Hembra</option>
            <option value="Macho">Macho</option>
        </select>
    </div>



    <div class="mb-3">
        <label for="" class="form-label">TIPO*</label>
        <select name="idTipoAnimal">
            @foreach ($tiposAnimales as $tipo1){
            @if($animal->idTipoAnimal == $tipo1->id)
            <option value="{{$tipo1->id}}" selected> {{$tipo1->tipo}}</option>
            @else
            <option value="{{$tipo1->id}}"> {{$tipo1->tipo}}</option>
            @endif
            }
            @endforeach
        </select>
    </div>


    <div class="mb-3">
        <label for="" class="form-label">Raza*</label>
        <select name="raza">
            @if($animal->raza == 'Raza')
            <option value="Raza" selected>Raza</option>
            @endif
            <option value="Raza" >Raza</option>
            <option value="Mestizo">Mestizo</option>
        </select>
    </div>



    <div class="mb-3">
        <label for="" class="form-label">Nombre Raza</label>
        <input id="nombreRaza" name="nombreRaza" type="text" class="form-control" tabindex="3" value="{{$animal->nombreRaza}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">NOMBRE</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3" value="{{$animal->nombre}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Nacimiento</label>
        <input id="fechaNacimiento" name="fechaNacimiento" type="date" class="form-control" tabindex="3" value="{{$animal->fechaNacimiento}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Edad </label>
        <input id="edad" name="edad" type="text" class="form-control" tabindex="3" value="{{$animal->edad}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" value="{{$animal->descripcion}}">
    </div>


    <div class="grid grid-cols-1 mt-5 mx-7">
        <img id="imagenSeleccionada" src="{{asset('uploads/animales/'.$animal->foto) }}" width="200px">
    </div>

    <div class="form-group">
        <label for="" class="form-label">Foto</label>
        <input type="file" id="foto" name="foto"   class="hidden"/>
    </div>



    <a href="/animales" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>


</form>

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