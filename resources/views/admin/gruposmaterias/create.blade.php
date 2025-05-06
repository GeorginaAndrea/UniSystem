@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.grupos.index')}}">Volver</a>
    <h1>Nuevo Grupo</h1>
@stop

@section('content')
<form action="{{ route('admin.gruposmaterias.store', $grupo) }}" method="POST">
    @csrf
    @foreach($materias as $materia)
        <div class="mb-3 border p-3">
            <input type="hidden" name="materias[{{ $loop->index }}][ClaveMateria]" value="{{ $materia->ClaveMateria }}">
            <p><strong>{{ $materia->Nombre }}</strong></p>
            <label>Cupo máximo:</label>
            <input type="number" name="materias[{{ $loop->index }}][CupoMaximo]" value="30" class="form-control" required>

            <label>Fecha inicio:</label>
            <input type="date" name="materias[{{ $loop->index }}][FechaInicio]" class="form-control" required>

            <label>Fecha fin:</label>
            <input type="date" name="materias[{{ $loop->index }}][FechaFin]" class="form-control" required>
        </div>
    @endforeach
    <button class="btn btn-success">Guardar materias</button>
</form>


@stop


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop