@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dispositivos</h1>
@stop

@section('content')
     <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>👤 Usuario</th>
                        <th>🌐 IP Local</th>
                        <th>🌍 IP Gateway</th>
                        <th>🔗 MAC Address</th>
                        <th>📝 Descripción</th>
                        <th>📅 Registro</th>
                        {{-- <th>🔍 Acción</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($dispositivos as $dispositivo)
                        <tr>
                            <td>
                                {{ optional($dispositivo->usuario)->name ?? 'Desconocido' }}
                            </td>
                            <td>{{ $dispositivo->ip_local }}</td>
                            <td>{{ $dispositivo->ip_gateway }}</td>
                            <td>
                                <span class="badge bg-info text-dark">
                                    {{ $dispositivo->mac_address }}
                                </span>
                            </td>
                            <td>{{ $dispositivo->descripcion }}</td>
                            <td>{{ \Carbon\Carbon::parse($dispositivo->fecha_registro)->format('d M Y, H:i') }}</td>
                            {{-- <td>
                                <a class="btn btn-sm btn-primary" href="#">Ver</a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop