@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create</h1>


@stop

@section('content')

<h1>Registro de profesores</h1>


<form action="{{url('profesores/listado')}}" method="POST" > 
    @csrf
    @include('profesores.form')
</form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
