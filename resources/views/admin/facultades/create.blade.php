@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.facultades.index')}}">Volver</a>
    <h1>Listado Facultades</h1>
@stop



{{-- Asumiendo que usas un layout --}}

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
        <h3 class="card-title">Facultad</h3>
    </div>
    <form action="{{ route('admin.facultades.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <h5 class="mb-3">Datos Escolares</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="NombreFacultad">Nombre</label>
                        <input type="text" name="NombreFacultad" class="form-control" placeholder="Ingresa el nombre de la facultad">
                    </div>
                    <div class="form-group">
                        <label for="Direccion">Direccion</label>
                        <input type="text" name="Direccion" class="form-control" placeholder="Ingresa la direccion de la facultad">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Guardar Facultad</button>
          </div>
    </form>
  </div>

@endsection
