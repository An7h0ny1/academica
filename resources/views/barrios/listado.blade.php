@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de barrios</p>
    <a class="btn btn-success" href="">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estrato</th>
            <th scope="col">Comuna</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($barrios as $barrio)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $barrio->codBarrio}}</td>
                <td> {{ $barrio->nomBarrio}}</td>
                <td> {{ $barrio->estBarrio}}</td>
                <td> {{ $barrio->comuna}}</td>
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