@extends('adminlte::page')

@section('title', 'Materias que Imparto')

@section('content_header')
    <h1>Materias que Imparto</h1>
@stop

@section('content')
    @forelse ($grupoMaterias as $grupoMateria)
        <div class="card mb-4 shadow-sm border-primary">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">{{ $grupoMateria->materia->Nombre }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Descripción:</strong> {{ $grupoMateria->materia->Descripcion ?? 'Sin descripción' }}
                </li>
                <li class="list-group-item">
                    <strong>Grupo:</strong> {{ $grupoMateria->grupo->Nombre ?? 'No registrado' }}
                </li>
                <li class="list-group-item">
                    <strong>Carrera:</strong> {{ $grupoMateria->grupo->carrera->NombreCarrera ?? 'No registrada' }}
                </li>
                <li class="list-group-item">
                    <strong>Facultad:</strong> {{ $grupoMateria->grupo->carrera->facultad->NombreFacultad ?? 'No registrada' }}
                </li>
                <li class="list-group-item">
                    <strong>Semestre:</strong> {{ $grupoMateria->materia->Semestre ?? 'No definido' }}
                </li>
                <li class="list-group-item">
                    <strong>Fechas:</strong> {{ \Carbon\Carbon::parse($grupoMateria->FechaInicio)->format('d/m/Y') ?? '-' }} 
                    - {{ \Carbon\Carbon::parse($grupoMateria->FechaFin)->format('d/m/Y') ?? '-' }}
                </li>
            </ul>
        </div>
    @empty
        <div class="alert alert-warning">
            No tienes materias asignadas por el momento.
        </div>
    @endforelse
@stop
