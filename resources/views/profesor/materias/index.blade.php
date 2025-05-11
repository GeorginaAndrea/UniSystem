@extends('adminlte::page')

@section('title', 'Materias del Profesor')

@section('content_header')
    <h1>Materias que imparte</h1>
@stop

@section('content')
    <div class="row">
        @forelse ($grupoMaterias as $grupoMateria)
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $grupoMateria->materia->Nombre }}</h5>
                        <p class="card-text">
                            <strong>Grupo:</strong> {{ $grupoMateria->grupo->Nombre }}<br>
                            <strong>Semestre:</strong> {{ $grupoMateria->materia->Semestre }}<br>
                            <strong>Descripción:</strong> {{ $grupoMateria->materia->Descripcion ?? 'No disponible' }}<br>
                            <strong>Carrera:</strong> {{ $grupoMateria->grupo->carrera->NombreCarrera ?? 'No registrada' }}<br>
                            <strong>Facultad:</strong> {{ $grupoMateria->grupo->carrera->facultad->NombreFacultad ?? 'No registrada' }}

                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    No tienes materias asignadas actualmente.
                </div>
            </div>
        @endforelse
    </div>
@stop
