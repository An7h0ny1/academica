@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>


@stop

@section('content')
    <p>Listado de Profesores</p>
    <a class="btn btn-success" href="/profesores/listado/create">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($profesores as $profesor)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $profesor->codProfesor}}</td>
                <td> {{ $profesor->nomProfesor}}</td>
                <td> {{ $profesor->catProfesor}}</td>
                <td>
                    <a href="{{ route('profesores.edit', $profesor->codProfesor) }}"class="btn btn-outline-info">Editar</a>
                    <form action="{{ route('profesores.destroy', $profesor->codProfesor)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
            @php
                $i = $i +1
            @endphp
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
