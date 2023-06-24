@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ciudades</h1>


@stop

@section('content')
    <p>Listado de ciudades</p>
    <a class="btn btn-success" href="">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Departamento</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($ciudades as $ciudad)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $ciudad->codCiudad}}</td>
                <td> {{ $ciudad->nomCiudad}}</td>
                <td> {{ $ciudad->departamento}}</td>
                <td>
                    <a href=""class="btn btn-outline-info">Editar</a>
                    <form action="" method="POST">
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
