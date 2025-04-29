@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.profesores.index')}}">Volver</a>
    <h1>Listado Profesores</h1>
@stop

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Registrar Profesor</h3>
    </div>
  
    <form action="{{ route('admin.profesores.store') }}" method="POST">
      @csrf
  
      <div class="card-body">
  
        <!-- Sección: Datos del Profesor -->
        <h5 class="mb-3">Datos Personales</h5>
        <div class="row">
          
          <div class="col-md-6">
  
            <div class="form-group">
              <label for="ApePaterno">Apellido Paterno</label>
              <input type="text" name="ApePaterno" class="form-control" placeholder="Ingrese el apellido paterno">
            </div>
  
            <div class="form-group">
              <label for="ApeMaterno">Apellido Materno</label>
              <input type="text" name="ApeMaterno" class="form-control" placeholder="Ingrese el apellido materno">
            </div>
  
            <div class="form-group">
              <label for="Nombres">Nombres</label>
              <input type="text" name="Nombres" class="form-control" placeholder="Ingrese los nombres">
            </div>
  
          </div>
  
          <div class="col-md-6">
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" name="Email" class="form-control" placeholder="Ingrese el correo electrónico">
            </div>
  
            <div class="form-group">
              <label for="Telefono">Teléfono</label>
              <input type="text" name="Telefono" class="form-control" placeholder="Ingrese el número de teléfono (10 dígitos)">
            </div>
  
            <div class="form-group">
              <label for="ClaveFacultad">Clave Facultad</label>
              <input type="number" name="ClaveFacultad" class="form-control" placeholder="Ingrese la clave de la facultad">
            </div>
          </div>
  
        </div>
  
      </div>
  
      <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary">Guardar Profesor</button>
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