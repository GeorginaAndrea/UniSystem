@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.materias.index')}}">Volver</a>
    <h1>Materias</h1>
@stop

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Registrar Materia</h3>
    </div>
  
    <form action="{{ route('admin.materias.store') }}" method="POST">
      @csrf
  
      <div class="card-body">
  
        <!-- Sección: Datos del Profesor -->
        <h5 class="mb-3">Datos Escolares</h5>
        <div class="row">
          
          <div class="col-md-6">
  
            <div class="form-group">
              <label for="Nombre">Nombre</label>
              <input type="text" name="Nombre" class="form-control" placeholder="Ingrese el nombre de la materia">
            </div>
  
            <div class="form-group">
              <label for="Descripcion">Descripcion</label>
              <input type="text" name="Descripcion" class="form-control" placeholder="Ingrese la descripcion">
            </div>
  
          </div>
          <div class="col-md-6">
  
        </div>
  
      </div>
  
      <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary">Guardar Materia</button>
      </div>
      
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