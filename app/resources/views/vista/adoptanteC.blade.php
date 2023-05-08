@extends('layouts.plantillabase')

@section('content')
<h1>VISTA INDEX CONTRATO</h1>

<form action="{{ route('adoptantes.create',$animal->id) }}" method="GET" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Ingrese DPI del adoptante</label>
        <input id="dpi" name="dpi" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary" tabindex="4">Siguiente</button>
    </div>
</form>

@endsection