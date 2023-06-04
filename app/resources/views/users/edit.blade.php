@extends('layouts.plantillabase')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Error en campos, por favor verifique la información:</h6>
        </div>
    @endif

    <h1>EDITAR UN ROL</h1>

    <form action="{{ route('users.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf


        <div class="mb-3">
            <label for="" class="form-label">USUARIO :</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="3"
                value="{{ $usuario->name }}">
            @if ($errors->has('name'))
                <p class="alert alert-danger">Ingrese nombre</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ROLES :</label>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Por favor seleccione un rol.</label>
            <select name="rol">
                @foreach ($roles as $rol)
                    {
                    <option value="{{ $rol->id }}"> {{ $rol->name }}</option>}
                @endforeach
            </select>
            @if ($errors->has('rol'))
                <p class="alert alert-danger">Seleccione rol </p>
            @endif
        </div>


        <div>
            @can('users.index')
                <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
            @endcan
            @can('users.edit')
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            @endcan
        </div>








    </form>
@endsection
