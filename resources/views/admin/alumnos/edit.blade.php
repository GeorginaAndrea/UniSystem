
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.alumnos.index')}}">Volver</a>
    <h1>Listado Alumnos</h1>
@stop

@section('content')
  {{-- @if(session('error'))
  <div class="alert alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Error:</strong> {{ session('error') }}
  </div>
  @endif

  @if($errors->any())
  <div class="alert alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif --}}
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Editar Información Alumnos</h3>
    </div>
  
    <form action="{{ route('admin.alumnos.update', $alumno->ClaveAlumno) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  
      <div class="card-body">
        
        <!-- Sección: Datos Personales -->
        <h5 class="mb-3">Datos Personales</h5>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="ApePaterno">Apellido Paterno</label>
              <input type="text" name="ApePaterno" id="ApePaterno" class="form-control" value="{{ $alumno->ApePaterno}}">
            </div>
  
            <div class="form-group">
              <label for="ApeMaterno">Apellido Materno</label>
              <input type="text" name="ApeMaterno" id="ApeMaterno" class="form-control" value="{{ $alumno->ApeMaterno}}">
            </div>
  
            <div class="form-group">
              <label for="Nombres">Nombres</label>
              <input type="text" name="Nombres" id="Nombres" class="form-control" value=" {{$alumno->Nombres}}">
            </div>
  
            <div class="form-group">
              <label for="Curp">CURP</label>
              <input type="text" name="Curp" id="Curp" class="form-control" value="{{ $alumno->Curp}}">
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="form-group">
              <label for="Genero">Género</label>
              <select name="Genero" id="Genero" class="form-control">
                <option value="{{$alumno->Genero}}"></option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
  
            <div class="form-group">
              <label for="EstCivil">Estado Civil</label>
              <input type="text" name="EstCivil" id="EstCivil" class="form-control" value="{{ $alumno->EstCivil}}">
            </div>
  
            <div class="form-group">
              <label for="FechaNacimiento">Fecha de Nacimiento</label>
              <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="form-control" value="{{ $alumno->FechaNacimiento}}">
            </div>
  
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" name="Email" id="Email" class="form-control" value=" {{ $alumno->Email}}">
            </div>
  
            <div class="form-group">
              <label for="Celular">Celular</label>
              <input type="text" name="Celular" id="Celular" class="form-control" value="{{ $alumno->Celular}}">
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
              <input type="text" name="Estado" id="Estado" class="form-control" value="{{ $alumno->Estado}}">
            </div>
  
            <div class="form-group">
              <label for="Municipio">Municipio</label>
              <input type="text" name="Municipio" id="Municipio" class="form-control" value="{{ $alumno->Municipio}}">
            </div>
  
            <div class="form-group">
              <label for="Colonia">Colonia</label>
              <input type="text" name="Colonia" id="Colonia" class="form-control" value="{{ $alumno->Colonia}}">
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="form-group">
              <label for="Direccion">Dirección</label>
              <input type="text" name="Direccion" id="Direccion" class="form-control" value="{{ $alumno->Direccion}}">
            </div>
  
            <div class="form-group">
              <label for="Telefono">Teléfono</label>
              <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{ $alumno->Telefono}}">
            </div>
          </div>
        </div>
  
        <hr>
  
        <!-- Sección: Datos Escolares -->
       
        <h5 class="mb-3">Datos Escolares</h5>
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <label for="ClaveCarrera">Carrera</label>
            <select name="ClaveCarrera" id="ClaveCarrera" class="form-control">
                <option value="">Seleccione una carrera</option>
                @foreach ($carreras as $nombre => $clave)
                <option value="{{ $clave }}" {{ old('ClaveCarrera') == $clave ? 'selected' : '' }}>
                  {{ $nombre }}
                </option>
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