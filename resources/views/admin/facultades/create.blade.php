@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.facultades.index')}}">Volver</a>
    <h1>Listado Facultades</h1>
@stop



{{-- Asumiendo que usas un layout --}}

@section('content')
<div class="container">
    
    <h2>Crear Facultad</h2>

    <form action="{{ route('admin.facultades.store') }}" method="POST">
        @csrf

        {{-- <div class="form-group">
            <label for="ClaveFacultad">Clave Facultad</label>
            <input type="number" name="ClaveFacultad" class="form-control" required>
        </div> --}}

        <div class="form-group">
            <label for="NombreFacultad">Nombre Facultad</label>
            <input type="text" name="NombreFacultad" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Direccion">Dirección</label>
            <input type="text" name="Direccion" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
</div>
@endsection
