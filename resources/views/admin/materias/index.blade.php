@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.materias.create')}}">Nueva Materia</a>
    <h1>Listado de Materias</h1>
@stop

@section('content')
<div class="container-fluid px-0">
    <div class="card shadow">
        <div class="card-body p-0">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead class="thead-dark text-center">
                    <tr>
                        <th style="width: 10%;">Clave</th>
                        <th style="width: 25%;">Nombre</th>
                        <th style="width: 35%;">Descripción</th>
                        <th style="width: 10%;">Semestre</th>
                        <th style="width: 20%;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materias as $nombreCarrera => $grupoMaterias)
                        <tr class="table-primary">
                            <td colspan="5" class="font-weight-bold text-uppercase text-center">
                                {{ $nombreCarrera }}
                            </td>
                        </tr>
                        @foreach($grupoMaterias as $materia)
                            <tr class="align-middle">
                                <td class="text-center">{{ $materia->ClaveMateria }}</td>
                                <td>{{ $materia->Nombre }}</td>
                                <td>{{ $materia->Descripcion }}</td>
                                <td class="text-center">{{ $materia->Semestre }}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.materias.edit', $materia->ClaveMateria) }}">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop

@section('css')
  
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop




{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.materias.create')}}">Nueva Materia</a>
    <h1>Listado de Materias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Carrera</th>
                        <th>Semestre</th>
                        <th>Editar</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($materias as $materia)
                        <tr>
                            <td>{{ $materia->ClaveMateria }}</td>
                            <td>{{ $materia->Nombre }}</td>
                            <td>{{ $materia->Descripcion }}</td>
                            <td>{{ $materia->carrera->NombreCarrera ?? 'Sin carrera' }}</td>
                            <td>{{ $materia->Semestre }}</td>
                            <td> <a  class="btn btn-primary btn-sm" href="{{route('admin.materias.edit', $materia->ClaveMateria)}}">
                                Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $materias->links() }}
            </div>
        </div>
    </div>
@stop

@section('css')
  
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop --}}
