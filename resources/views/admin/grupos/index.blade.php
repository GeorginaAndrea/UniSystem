@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado Grupos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Clave Grupo</th>
                        <th>Clave Carrera</th>
                        <th>Clave Facultad</th>
                        <th>Clave Profesor</th>
                        <th>Editar</th>
                        {{-- <th>Eliminar</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($grupos as $grupo)
                        <tr>
                            <td>{{ $grupo->ClaveGrupo }}</td>
                            <td>{{ $grupo->ClaveCarrera }}</td>
                            <td>{{ $grupo->ClaveFacultad }}</td>
                            <td>{{ $grupo->ClaveProfesor }}</td>
                            <td> <a  class="btn btn-primary btn-sm" href="{{route('admin.grupos.edit', $grupo->ClaveGrupo)}}">
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