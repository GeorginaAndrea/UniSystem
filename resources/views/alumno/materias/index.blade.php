@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Materias</h1>
@stop

@section('content')

    <div class="container-fluid px-0">
        <div class="card shadow">
            <div class="card-body p-0">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">Clave</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Semestre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($relaciones as $relacion )
                            <tr>
                                <td>{{ $relacion->grupoMateria->materia->ClaveMateria ?? 'N/A' }}</td>
                                <td>{{ $relacion->grupoMateria->materia->Nombre ?? 'N/A' }}</td>
                                <td>{{ $relacion->grupoMateria->materia->Descripcion ?? 'N/A' }}</td>
                                <td>{{ $relacion->grupoMateria->materia->Semestre ?? 'N/A' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">No tienes materias asignadas</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    
@stop