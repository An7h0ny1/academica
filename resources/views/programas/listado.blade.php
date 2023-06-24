@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>


@stop

@section('content')

@if(Session::has('mensaje'))
{
    {{Session::get('mensaje')}}
}
@endif
    <p>Listado de Programas</p>
    <a class="btn btn-success" href="/programas/listado/create">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Facultad</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($programas as $programa)
            
            <tr>
                <td scope="row">{{$i}}</td>
                <td>{{$programa->codPrograma}}</td>
                <td>{{$programa->nomPrograma}}</td>
                <td>{{$programa->facultad}}</td>
                <td>
                <a href="{{url('/programas/listado/'.$programa->codPrograma. '/edit')}}" class="btn btn-outline-info">Editar </a>
                    <form action="{{ url('/programas/listado/'.$programa->codPrograma)}}" method="POST">
                        @csrf
                        {{method_field ('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
            @php
                $i++
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
