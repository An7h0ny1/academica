@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de Estudiantes</p>
    <a class="btn btn-success" href="/estudiantes/listado/create">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha</th>
            <th scope="col">Sexo</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Barrio</th>
            <th scope="col">Programa</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($estudiantes as $estudiante)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $estudiante->codEstudiante}}</td>
                <td> {{ $estudiante->nomEstudiante}}</td>
                <td> {{ $estudiante->edadEstudiante}}</td>
                <td> {{ $estudiante->fechaEstudiante}}</td>
                <td> {{ $estudiante->sexEstudiante}}</td>
                <td> {{ $estudiante->ciudad}}</td>
                <td> {{ $estudiante->barrio}}</td>
                <td> {{ $estudiante->programa}}</td>
                <td>
                    <a href="{{ route('estudiantes.edit', $estudiante->codEstudiante) }}"class="btn btn-outline-info">Editar</a>
                    <form action="{{ route('estudiantes.destroy', $estudiante->codEstudiante)}}" method="POST">
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
