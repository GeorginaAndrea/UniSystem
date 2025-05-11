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
  
    <form action="{{ route('admin.materias.update', $materia->ClaveMateria) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="card-body">
  
        <!-- Sección: Datos del Profesor -->
        <h5 class="mb-3">Datos Escolares</h5>
        <div class="row">
          
          <div class="col-md-6">
  
            <div class="form-group">
              <label for="Nombre">Nombre</label>
              <input type="text" name="Nombre" id="Nombre" class="form-control" value=" {{ $materia->Nombre}}">
            </div>
  
            <div class="form-group">
              <label for="Descripcion">Descripcion</label>
              <input type="text" name="Descripcion" id="Descripcion" class="form-control" value="{{ $materia->Descripcion }}">
            </div>
  
          </div>


          <div class="col-md-6">
  
            <div class="form-group">
              <label for="Semestre">Semestre</label>
              <input type="number" name="Semestre" id="Semestre" class="form-control" value="{{ $materia->Semestre }}">
            </div>
  
            <div class="mb-3">
              <label for="ClaveCarrera">Carrera:</label>
              <select name="ClaveCarrera" id="ClaveCarrera" class="form-control" required>
                  @foreach ($carreras as $carrera)
                      <option value="{{ $carrera->ClaveCarrera }}">{{ $carrera->NombreCarrera }}</option>
                  @endforeach
              </select>
            </div>
  
          </div>
  
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