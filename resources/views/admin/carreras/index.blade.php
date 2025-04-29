@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.carreras.create')}}">Nueva Carrera</a>
<h1>Listado Carreras</h1>
@stop

@section('content')
    <div  class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Clave Carrera</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        {{-- <th>Eliminar</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($carreras as $carrera)
                        <tr>
                            <td>{{ $carrera->ClaveCarrera }}</td>
                            <td>{{ $carrera->Nombre }}</td>
                            <td> <a  class="btn btn-primary btn-sm" href="{{route('admin.carreras.edit', $carrera->ClaveCarrera)}}">
                                Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop