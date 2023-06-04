@extends('layouts.plantillabase')

@section('content')
    <x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
            </x-slot>

            <x-validation-errors class="mb-4" />
            <h1 ><center>REGISTRO DE USUARIO</center></h1>

            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Nombre') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                        autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Correo electrónico') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Contraseña') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>


                <div class="flex items-center justify-end mt-4">
                    @can('users.index')
                        <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    @endcan
                    @can('users.create')
                        <x-button class="ml-4">
                            {{ __('Registrar') }}
                        </x-button>
                    @endcan
                </div>
            </form>

        </x-authentication-card>
    </x-guest-layout>
@endsection
