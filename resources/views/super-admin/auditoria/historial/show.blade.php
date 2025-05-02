@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Historial</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Registro de cambio ID:</strong> {{ $log->id }}
        </div>
        <div class="card-body">
            <p><strong>Usuario:</strong> {{ $log->usuario_id }}</p>
            <p><strong>Tabla Afectada:</strong> {{ $log->tabla_afectada }}</p>
            <p><strong>Tipo de Cambio:</strong> {{ $log->tipo_cambio }}</p>
            <p><strong>Fecha de Cambio:</strong> {{ $log->fecha }}</p>

            <hr>

            @php
                $anteriores = json_decode($log->datos_anteriores ?? '{}', true);
                $nuevos = json_decode($log->datos_nuevos ?? '{}', true);
                $campos = collect($anteriores)->merge($nuevos)->keys(); // Unifica llaves de ambos arrays
            @endphp

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Campo</th>
                        <th>Valor Anterior</th>
                        <th>Valor Nuevo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($campos as $campo)
                        @php
                            $anterior = $anteriores[$campo] ?? '—';
                            $nuevo = $nuevos[$campo] ?? '—';
                            $cambio = $anterior !== $nuevo;
                        @endphp
                        <tr class="{{ $cambio ? 'table-warning' : '' }}">
                            <td>{{ $campo }}</td>
                            <td class="{{ $cambio ? 'text-danger font-weight-bold' : '' }}">{{ $anterior }}</td>
                            <td class="{{ $cambio ? 'text-success font-weight-bold' : '' }}">{{ $nuevo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="{{ route('super-admin.auditoria.historial.index') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
@stop