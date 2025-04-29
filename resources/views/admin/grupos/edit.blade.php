@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Informacion Grupos</h1>
@stop

@section('content')
    <div class="container">
        <h1 class="mb-4">Editar Grupo</h1>

        <form action="{{ route('admin.grupos.update', $grupo->ClaveGrupo) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="ClaveGrupo" class="form-label">Clave del Grupo</label>
                <input type="number" name="ClaveGrupo" class="form-control" value="{{ old('ClaveGrupo', $grupo->ClaveGrupo) }}" readonly>
            </div>

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" name="Nombre" maxlength="2" class="form-control" value="{{ old('Nombre', $grupo->Nombre) }}">
                @error('Nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Semestre" class="form-label">Semestre</label>
                <input type="number" name="Semestre" class="form-control" min="1" max="12" value="{{ old('Semestre', $grupo->Semestre) }}" required>
                @error('Semestre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ClaveCarrera" class="form-label">Carrera</label>
                <select name="ClaveCarrera" class="form-select">
                    <option value="">-- Selecciona una carrera --</option>
                    @foreach($carreras as $carrera)
                        <option value="{{ $carrera->ClaveCarrera }}" {{ (old('ClaveCarrera', $grupo->ClaveCarrera) == $carrera->ClaveCarrera) ? 'selected' : '' }}>
                            {{ $carrera->NombreCarrera }}
                        </option>
                    @endforeach
                </select>
                @error('ClaveCarrera')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ClaveFacultad" class="form-label">Facultad</label>
                <select name="ClaveFacultad" class="form-select">
                    <option value="">-- Selecciona una facultad --</option>
                    @foreach($facultades as $facultad)
                        <option value="{{ $facultad->ClaveFacultad }}" {{ (old('ClaveFacultad', $grupo->ClaveFacultad) == $facultad->ClaveFacultad) ? 'selected' : '' }}>
                            {{ $facultad->NombreFacultad }}
                        </option>
                    @endforeach
                </select>
                @error('ClaveFacultad')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Actualizar Grupo</button>
        </form>
    </div>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop