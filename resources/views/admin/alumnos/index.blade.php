@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado Alumnos</h1>
@stop

@section('content')
    <div class="container">
        {{-- @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif --}}

        <!-- Tabla -->
        <table class="table">
            <thead>
                <tr>
                    <th>Clave Alumno</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Facultad</th>
                    <th>Carrera</th>
                    {{-- <th>Editar</th>
                    <th>Eliminar</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->ClaveAlumno }}</td>
                        <td>{{ $alumno->ApePaterno }}</td>
                        <td>{{ $alumno->Nombres }}</td>
                        <td>{{ $alumno->Email }}</td>
                        <td>{{ $alumno->ClaveFacultad }}</td>
                        <td>{{ $alumno->ClaveCarrera }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop