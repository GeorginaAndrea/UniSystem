@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.grupos.create')}}">Nuevo Grupo</a>
    <h1>Listado de materias asignadas</h1>
@stop

@section('content')
    {{-- Grupos Asignados --}}
    <div class="card">
        <div class="card-header bg-success text-white">
            <strong>Grupos Asignados</strong>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Clave Grupo</th>
                        <th>Clave Facultad</th>
                        <th>Clave Carrera</th>
                        <th>Asignado a</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gruposAsignados as $grupo)
                        <tr>
                            <td>{{ $grupo->ClaveGrupo }}</td>
                            <td>{{ $grupo->ClaveFacultad }}</td>
                            <td>{{ $grupo->ClaveCarrera }}</td>
                            <td>
                                @foreach($grupo->asignaciones as $asignacion)
                                    {{ $asignacion->ClaveProfesor }}<br>
                                @endforeach
                            </td>
                            <td><a class="btn btn-primary btn-sm" href="{{ route('admin.grupos.edit', $grupo->ClaveGrupo) }}">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Grupos Sin Asignar --}}
    <div class="card mt-4">
        <div class="card-header bg-warning">
            <strong>Grupos Sin Asignar</strong>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Clave Grupo</th>
                        <th>Clave Facultad</th>
                        <th>Clave Carrera</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gruposSinAsignar as $grupo)
                        <tr>
                            <td>{{ $grupo->ClaveGrupo }}</td>
                            <td>{{ $grupo->ClaveFacultad }}</td>
                            <td>{{ $grupo->ClaveCarrera }}</td>
                            <td><a class="btn btn-info btn-sm" href="{{ route('admin.grupos.edit', $grupo->ClaveGrupo) }}">Asignar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script> console.log("Listado de grupos cargado."); </script>
@stop
