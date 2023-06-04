@extends('layouts.plantillabase')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <div class="formbold-form-title">
                <h1><b>
                        EDICIÓN DEL CONTRATO</h1>
            </div>

            <form action="{{ route('contratos.update', $contrato->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <h3> Fecha : </h3>
                    <input id="fechaSalida" name="fechaSalida" type="date" class="form-control" required
                        value={{ $contrato->fechaSalida }}>

                </div>

                <div>
                    <h3> Lugar : </h3>
                    <input id="lugar" name="lugar" type="text" class="form-control" tabindex="3" required
                        value={{ $contrato->lugar }}>
                </div>

                <div>
                    <label for="" class="formbold-form-label">Validar el estado del contrato :</label>
                    <select name="estado">
                        <option value="valido">Válido</option>
                        <option value="suspendido">Suspendido</option>
                    </select>
                    @if ($errors->has('estado'))
                        <p class="alert alert-danger">Seleccione estado </p>
                    @endif
                </div>

                <div>
                    <h3> Datos del adoptante </h3>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Adoptante1->nombre }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> DPI:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Adoptante1->dpi }}>
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Teléfono 1:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Adoptante1->telefono1 }}>
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Teléfono 2:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Adoptante1->telefono2 }}>
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Correo electrónico:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Adoptante1->correo }}>
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Domicilio:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Adoptante1->direccion }}>
                </div>

                <div>
                    <h3> Datos del representante de la asoción </h3>
                </div>
                <div>
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->User->name }}>
                </div>

                <div>
                    <h3> Datos de la mascota </h3>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Nombre:</label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Animal1->nombre }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Especie: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Animal1->TipoAnimal->tipo }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Sexo: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Animal1->sexo }}>
                </div>

                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Raza: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Animal1->raza }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Nombre de la raza:
                        <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                            value={{ $contrato->Animal1->nombreRaza }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Fecha de nacimiento: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Animal1->fechaNacimiento }}>
                </div>
                <div class="mb-3">
                    <label for="" class="formbold-form-label"> Edad: </label>
                    <input id="gohar2" name="hogar2" type="text" class="form-control" readonly
                        value={{ $contrato->Animal1->edad }}>
                </div>

                <div>
                    <label for="" class="form-label"> Observaciones : </label>
                    <input id="observacion" name="observacion" type="text" class="form-control" tabindex="3"
                        required value={{ $contrato->observacion }}>
                </div>

                <!-- Dejar estos input invisible solo se necesita para mandar ids -->
                <input type="hidden" id="idAnimal" name="idAnimal" type="text"
                    value="{{ $contrato->Animal1->id }}">
                <input type="hidden" id="idSocio" name="idSocio" type="text" value="{{ Auth::user()->id }}">
                <input type="hidden" id="idAdoptante" name="idAdoptante" type="text"
                    value="{{ $contrato->Adoptante1->id }}">

                @can('contratos.edit')
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                @endcan
                @can('contratos.index')
                    <a href="/contratos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                @endcan

            </form>
        </div>
    </div>
@endsection
