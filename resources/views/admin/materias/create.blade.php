@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de materias</h1>
@stop

@section('content')
<div class="container">
    <h2>Crear Materia</h2>

    <form action="{{ route('admin.materias.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ClaveMateria">Clave Materia</label>
            <input type="number" name="ClaveMateria" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Nombre">Nombre Materia</label>
            <input type="text" name="Nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
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