@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.profesores.create')}}">Nuevo Profesor</a>
<h1>Listado Profesores</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Clave Profesor</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Facultad</th>
                        <th>Editar</th>
                        {{-- <th>Eliminar</th> --}}
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
                            <td> <a  class="btn btn-primary btn-sm" href="{{route('admin.profesores.edit', $profesor->ClaveProfesor)}}">
                                Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        {{-- @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif --}}

        <!-- Tabla -->
        
    </div>
@stop

@section('css')
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop