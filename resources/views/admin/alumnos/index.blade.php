@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.alumnos.create')}}">Nuevo Alumno</a>
    <h1>Listado Alumnos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Clave Alumno</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Email</th>
                        <th>Facultad</th>
                        <th>Carrera</th>
                        <th>Editar</th>
                        {{-- <th>Eliminar</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->ClaveAlumno }}</td>
                            <td>{{ $alumno->ApePaterno }}</td>
                            <td>{{ $alumno->Nombres }}</td>
                            <td>{{ $alumno->Email }}</td>
                            <td>{{ $alumno->facultad->NombreFacultad ?? 'N/A' }}</td>
                            <td>{{ $alumno->carrera->Nombre ?? 'N/A' }}</td>
                            <td> <a  class="btn btn-primary btn-sm" href="{{route('admin.alumnos.edit', $alumno->ClaveAlumno)}}">
                                Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $alumnos->links() }}
            </div>
            
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