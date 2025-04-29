@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.alumnos.index')}}">Volver</a>
    <h1>Listado Alumnos</h1>
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Registrar Alumno</h3>
    </div>
  
    <form action="{{ route('admin.alumnos.store') }}" method="POST">
      @csrf
  
      <div class="card-body">
        
        <!-- Sección: Datos Personales -->
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
  
            <div class="form-group">
              <label for="Curp">CURP</label>
              <input type="text" name="Curp" class="form-control" placeholder="Ingrese la CURP">
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="form-group">
              <label for="Genero">Género</label>
              <select name="Genero" class="form-control">
                <option value="">Seleccione una opción</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
  
            <div class="form-group">
              <label for="EstCivil">Estado Civil</label>
              <input type="text" name="EstCivil" class="form-control" placeholder="Ingrese el estado civil">
            </div>
  
            <div class="form-group">
              <label for="FechaNacimiento">Fecha de Nacimiento</label>
              <input type="date" name="FechaNacimiento" class="form-control">
            </div>
  
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" name="Email" class="form-control" placeholder="Ingrese el correo electrónico">
            </div>
  
            <div class="form-group">
              <label for="Celular">Celular</label>
              <input type="text" name="Celular" class="form-control" placeholder="Ingrese el número de celular">
            </div>
          </div>
        </div>
  
        <hr>
  
        <!-- Sección: Domicilio -->
        <h5 class="mb-3">Domicilio</h5>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="Estado">Estado</label>
              <input type="text" name="Estado" class="form-control" placeholder="Ingrese el estado">
            </div>
  
            <div class="form-group">
              <label for="Municipio">Municipio</label>
              <input type="text" name="Municipio" class="form-control" placeholder="Ingrese el municipio">
            </div>
  
            <div class="form-group">
              <label for="Colonia">Colonia</label>
              <input type="text" name="Colonia" class="form-control" placeholder="Ingrese la colonia">
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="form-group">
              <label for="Direccion">Dirección</label>
              <input type="text" name="Direccion" class="form-control" placeholder="Ingrese la dirección completa">
            </div>
  
            <div class="form-group">
              <label for="Telefono">Teléfono</label>
              <input type="text" name="Telefono" class="form-control" placeholder="Ingrese el número de teléfono">
            </div>
          </div>
        </div>
  
        <hr>
  
        <!-- Sección: Datos Escolares -->
       
        <h5 class="mb-3">Datos Escolares</h5>
        <div class="row">
        
        <div class="col-md-6">
            <div class="form-group">
            <label for="ClaveFacultad">Facultad</label>
            <select name="ClaveFacultad" class="form-control">
                <option value="">Seleccione una facultad</option>
                @foreach ($facultades as $clave => $nombre)
                <option value="{{ $clave }}">{{ $nombre }}</option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label for="ClaveCarrera">Carrera</label>
            <select name="ClaveCarrera" class="form-control">
                <option value="">Seleccione una carrera</option>
                @foreach ($carreras as $nombre => $clave)
                    <option value="{{ $clave }}">{{ $nombre }}</option>
                @endforeach
            </select>
            </div>
        </div>

        </div>

  
      <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary">Guardar Alumno</button>
      </div>
    </form>
  </div>
  
    <div class="card">
        <div class="card-body">
            
            
        </div>
    </div>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop