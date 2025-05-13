@extends('adminlte::page')

@section('title', 'Mis Grupos')

@section('content_header')
    <h1>Mis Grupos</h1>
@stop

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Alumnos del grupo {{ $grupoMateria->grupo->Nombre ?? '' }}</h2>

        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Clave</th>
                    <th>Nombre completo</th>
                    <th>Email</th>
                    <th>Carrera</th>
                    <th>Calificacion</th>
                    <th>Faltas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->ClaveAlumno }}</td>
                        <td>{{ $alumno->ApePaterno }} {{ $alumno->ApeMaterno }} {{ $alumno->Nombres }}</td>
                        <td>{{ $alumno->Email }}</td>
                        <td>{{ $alumno->carrera->NombreCarrera ?? 'No registrada' }}</td>
                        @php
                            $registro = $alumno->kardex->first(); // Ya está filtrado por GrupoMateria
                        @endphp

                        <td>
                            {{ $registro->Calificacion ?? 'Sin calificación' }}
                        </td>
                        <td>
                            {{ $registro->Faltas ?? 'Sin faltas' }}
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modalEditar{{ $alumno->ClaveAlumno }}">
                                Registrar
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No hay alumnos inscritos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <a href="{{ route('profesor.grupos.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
@stop