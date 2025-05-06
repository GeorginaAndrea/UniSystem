@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.alumnos.index')}}">Volver</a>
    <h1>Nuevo Grupo</h1>
@stop

@section('content')

{{-- <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Registrar grupo</h3>
    </div>

    <form action="{{ route('admin.grupos.store') }}" method="POST">
        @csrf

        <div class="card-body">
            <h5>Datos del grupo</h5>

            <div class="row">
                <!-- Columna 1: Nombre y Semestre -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Ingrese el nombre del grupo">
                    </div>

                    <div class="form-group">
                        <label for="Semestre">Semestre</label>
                        <input type="number" name="Semestre" class="form-control" placeholder="Ingrese el semestre">
                    </div>

                    <div class="form-group">
                        <label for="CupoMaximo">Cupo Maximo</label>
                        <input type="number" name="CupoMaximo" class="form-control" placeholder="Ingrese el semestre">
                    </div>
                </div>

                <!-- Columna 2: Carrera y Materias -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ClaveCarrera">Carrera</label>
                        <select name="ClaveCarrera" class="form-control">
                            <option value="">Seleccione una carrera</option>
                            @foreach ($carreras as $nombre => $clave)
                                <option value="{{ $clave }}" {{ old('ClaveCarrera') == $clave ? 'selected' : '' }}>
                                    {{ $nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Materias</label>
                        <div class="pl-2">
                            @foreach ($materias as $materia)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="materias_claves[]" id="materias_{{ $materia->ClaveMateria }}" value="{{ $materia->ClaveMateria }}">
                                    <label class="form-check-label" for="materias_{{ $materia->ClaveMateria }}">
                                        {{ $materia->Nombre }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <small class="text-muted">Selecciona las materias.</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Guardar Grupo</button>
        </div>
    </form>
</div> --}}
<h2>Crear nuevo grupo</h2>

<form action="{{ route('admin.grupos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="Nombre">Nombre del grupo (ej. A, B, C):</label>
        <input type="text" name="Nombre" class="form-control" maxlength="1" required>
    </div>

    <div class="mb-3">
        <label for="Semestre">Semestre:</label>
        <input type="number" name="Semestre" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="ClaveCarrera">Carrera:</label>
        <select name="ClaveCarrera" class="form-control" required>
            @foreach ($carreras as $carrera)
                <option value="{{ $carrera->ClaveCarrera }}">{{ $carrera->NombreCarrera }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Crear grupo</button>
</form>
@stop


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop