@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.carreras.index')}}">Volver</a>
    <h1>Listado Carreras</h1>
@stop

@section('content')
  @if(session('error'))
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
  @endif
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Carrera</h3>
    </div>
  
    <form action="{{ route('admin.carreras.store') }}" method="POST">
      @csrf
  
      <div class="card-body">
        
        <!-- Sección: Datos Personales -->
        <h5 class="mb-3">Datos Escolares</h5>
        <div class="row">
          <div class="col-md-6">
  
            <div class="form-group">
              <label for="Nombre">Nombre</label>
              <input type="text" name="Nombre" class="form-control" placeholder="Ingrese el nombre de la carrera">
            </div>
        </div>

  
      <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary">Guardar Carrera</button>
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