@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Informacion Facultades</h1>
@stop

@section('content')
@section('content')
<div class="container">
    <h2>Editar Facultad</h2>

    <form action="{{ route('facultad.update', $facultad->ClaveFacultad) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ClaveFacultad">Clave Facultad</label>
            <input type="number" name="ClaveFacultad" class="form-control" value="{{ $facultad->ClaveFacultad }}" readonly>
        </div>

        <div class="form-group">
            <label for="NombreFacultad">Nombre Facultad</label>
            <input type="text" name="NombreFacultad" class="form-control" value="{{ $facultad->NombreFacultad }}" required>
        </div>

        <div class="form-group">
            <label for="Direccion">Dirección</label>
            <input type="text" name="Direccion" class="form-control" value="{{ $facultad->Direccion }}" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Actualizar</button>
    </form>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop