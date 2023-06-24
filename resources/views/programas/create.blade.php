@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create</h1>


@stop

@section('content')

<h1>Formulario Programa</h1>




<form action="{{url('/programas/listado')}}" method="POST" > 

    @csrf
    @include('programas.form')
</form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
