@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Profesores</h1>
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
                    <th>Clave Profesor</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Facultad</th>
                    {{-- <th>Editar</th>
                    <th>Eliminar</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($profesores as $profesor)
                    <tr>
                        <td>{{ $profesor->ClaveProfesor }}</td>
                        <td>{{ $profesor->ApePaterno }}</td>
                        <td>{{ $profesor->Nombres}}</td>
                        <td>{{ $profesor->Email}}</td>
                        <td>{{ $profesor->Telefono}}</td>
                        <td>{{ $profesor->ClaveFacultad}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop