@extends('layouts.plantillabase')

@section('content')
<h1>INFORMACIÓN DEL ADOPTANTE</h1>

<form action="{{ route('contratos.create') }}" method="GET" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Ingrese DPI del adoptante</label>
        <input id="dpi" name="dpi" type="text" class="form-control" tabindex="3">
    </div>
    <!-- Dejar este input invisible solo se necesita para mandar id -->
    <input type="hidden" id="id" name="id" type="text" value="{{$id}}" >

    <div class="mb-3">
    <button type="submit" class="btn btn-primary" tabindex="4">Siguiente</button>
    </div>
</form>

@endsection