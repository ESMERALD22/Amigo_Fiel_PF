@extends('layouts.plantillabase')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido Dashboard') }}
        </h2>
        <img class="" src="{{ asset('vendor/adminlte/dist/img/home.png') }}" alt="..." />
    </x-slot>

</x-app-layout>

@endsection
