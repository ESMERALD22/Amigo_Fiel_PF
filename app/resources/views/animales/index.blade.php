@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="/DataTables/datatables.css" />
@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif


    <h1><b>
            <center> ANIMALES</center>
    </h1>

    @can('animales.create')
        <a href="{{ route('animales.create') }}" class="btn-lg btn-primary">Ingresar animal</a>
    @endcan

    <div class="card">
        <div class="card-body">

            <table id="animalesT" class="table  table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Especie</th>
                        <th scope="col">Nombre del Animal</th>
                        <th scope="col">Fotografía</th>
                        <th scope="col">Estado</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($animales as $animal)
                        <tr>

                            <td>{{ $animal->id }}</td>
                            <td>{{ $animal->sexo }}</td>

                            <td>
                                {{ $animal->TipoAnimal->tipo }}
                            </td>
                            <td>{{ $animal->nombre }}</td>
                            <td>
                                <img src="{{ asset('./uploads/animales/' . $animal->foto) }}" width="100px" height="100px"
                                    alt="Image">
                            </td>
                            <td>

                                @if ($animal->estado == 0)
                                    Sin adoptar
                                @else
                                    Adoptado
                                @endif
                            </td>

                            <td width="10px">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Más opciones
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @can('animales.show')
                                            <div><a href="{{ route('animales.show', $animal->id) }} "
                                                    class="dropdown-item">Información</a></div>
                                        @endcan

                                        @can('animales.edit')
                                            <div><a href="{{ route('animales.edit', $animal->id) }} "
                                                    class="dropdown-item">Editar</a>
                                            </div>
                                        @endcan


                                        @can('contratos.create')
                                            <a href="vista/{{ $animal->id }}" class="dropdown-item">Adoptar</a>
                                        @endcan

                                        @can('ingresoAnimales.create')
                                            <div><a href="hogar/{{ $animal->id }}" class="dropdown-item">Asignar hogar
                                                    temporal</a>
                                            </div>
                                        @endcan

                                        @can('registrosMedicos.create')
                                            <form action="{{ route('registrosMedicos.create') }} " method="GET">
                                                @csrf
                                                <!-- Dejar este input invisible solo se necesita para mandar id -->
                                                <input type="hidden" id="id" name="id" type="text"
                                                    value="{{ $animal->id }}">
                                                <button type="submit" class="dropdown-item">Registrar tratamiento
                                                    médico</button>
                                            </form>
                                        @endcan

                                        @can('salidaAnimales.create')
                                            <form action="{{ route('salidaAnimales.create') }} " method="GET">
                                                @csrf
                                                <!-- Dejar este input invisible solo se necesita para mandar id -->
                                                <input type="hidden" id="id" name="id" type="text"
                                                    value="{{ $animal->id }}">
                                                <button type="submit" class="dropdown-item"> Registrar salida</button>
                                            </form>
                                        @endcan
                                    </div>
                                </div>
                            </td>
                            <td> @can('animales.destroy')
                                    <form action="{{ route('animales.destroy', $animal->id) }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Realmente desea eliminar?')">Borrar</button>
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script src="/DataTables/datatables.js"></script>
    <script>
        $(document).ready(function() {
            $('#animalesT').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@endsection
