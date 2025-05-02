@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Informacion Profesores</h1>
@stop

@section('content')
 <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Editar Informacion</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.profesores.update', $profesor->ClaveProfesor) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h5 class="mb-3">Datos Personales</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ApePaterno">Apellido Paterno</label>
                            <input type="text" name="ApePaterno" id="ApePaterno" class="form-control" value="{{ $profesor->ApePaterno }}">
                        </div>

                        <div class="form-group">
                            <label for="ApePaterno">Apellido Materno</label>
                            <input type="text" name="ApeMaterno" id="ApeMaterno" class="form-control" value="{{ $profesor->ApeMaterno }}">
                        </div>

                        <div class="form-group">
                            <label for="ApePaterno">Nombres</label>
                            <input type="text" name="Nombres" id="Nombres" class="form-control" value="{{ $profesor->Nombres }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" id="Email" class="form-control" value="{{ $profesor->Email}}">
                        </div>
                        <div class="form-group">
                            <label for="Telefono">Telefono</label>
                            <input type="tel" name="Telefono" id="Telefono" class="form-control" value="{{ $profesor->Telefono}}">
                        </div>

                        
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
        </form>
           
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