@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create</h1>


@stop

@section('content')

<h1>Edicion de Estudiantes</h1>

<form action="{{ route('estudiantes.update', $estudiante->codEstudiante) }}" method="POST">
    @csrf
    @method('PATCH')
    @include('estudiantes.form')
</form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
