@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--     <h1>BIENVENIDO</h1> -->

@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
