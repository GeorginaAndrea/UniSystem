@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Historial</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>USUARIO</th>
                        <th>TABLA AFECTADA</th>
                        <th>TIPO CAMBIO</th>
                        <th>VER DETALLES</th>
                        {{-- <th>DATOS ANTERIORES</th>
                        <th>DATOS NUEVOS</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ $log->usuario_id }}</td>
                            <td>{{ $log->tabla_afectada }}</td>
                            <td>{{ $log->tipo_cambio }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route ('super-admin.auditoria.historial.show', $log->id) }}">Ver</a>
                            </td>
                            {{-- <td>{{ $log->datos_anteriores }}</td>
                            <td>{{ $log->datos_nuevos }}</td> --}}
                            {{-- <td> <a  class="btn btn-primary btn-sm" href="{{route('admin.alumnos.edit', $alumno->ClaveAlumno)}}">
                                Editar
                                </a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
                
            </table>

            {{ $logs->links() }}
        </div>
    </div>
@stop