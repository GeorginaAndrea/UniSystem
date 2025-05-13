@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sesiones</h1>
@stop

@section('content')
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Historial de Sesiones</h3>
            <button class="btn btn-outline-primary btn-sm" onclick="toggleActivos()">Mostrar/Ocultar solo activos</button>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover table-bordered" id="tabla-sesiones">
                <thead class="thead-dark">
                    <tr>
                        <th>Usuario</th>
                        <th>Dispositivo</th>
                        <th>Inicio Sesión</th>
                        <th>Fin Sesión</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sesiones as $sesion)
                        <tr class="sesion-fila {{ is_null($sesion->fecha_logout) ? 'activa' : '' }}">
                            <td>{{ $sesion->usuario->name ?? 'Desconocido' }}</td>
                            <td>
                                @if($sesion->dispositivo)
                                    {{ $sesion->dispositivo->ip_local }}<br>
                                    <small>{{ $sesion->dispositivo->mac_address }}</small>
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($sesion->fecha_login)->format('d/m/Y H:i:s') }}</td>
                            <td>
                                @if ($sesion->fecha_logout)
                                    {{ \Carbon\Carbon::parse($sesion->fecha_logout)->format('d/m/Y H:i:s') }}
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>
                                @if (is_null($sesion->fecha_logout))
                                    <span class="badge badge-success">Activa</span>
                                @else
                                    <span class="badge badge-secondary">Cerrada</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $sesiones->links() }}
            </div>
        </div>
    </div>
@stop


@section('js')
<script>
    function toggleActivos() {
        document.querySelectorAll('.sesion-fila').forEach(row => {
            if (!row.classList.contains('activa')) {
                row.classList.toggle('d-none');
            }
        });
    }
</script>
@stop