@extends('adminlte::page')

@section('title', 'Mis Grupos')

@section('content_header')
    <h1>Mis Grupos</h1>
@stop

@section('content')
    <div class="container-fluid px-0">
        <div class="card shadow">
            <div class="card-body p-0">
                <table class="table table-bordered table-striped table-hover mb-0"> 
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">Grupo</th>
                            <th scope="col">Semestre</th>
                            <th scope="col">Materia</th>
                            <th scope="col">Cupo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($relaciones as $relacion)
                        <tr>
                            <td>{{ $relacion->grupoMateria->grupo->Nombre ?? 'N/A' }}</td>
                            <td>{{ $relacion->grupoMateria->grupo->Semestre ?? 'N/A' }}</td>
                            <td>{{ $relacion->grupoMateria->materia->Nombre ?? 'N/A' }}</td>
                            <td>{{ $relacion->grupoMateria->CupoMaximo ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('profesor.grupos.alumnos', $relacion->grupoMateria->grupo->ClaveGrupo) }}" class="btn btn-sm btn-primary">
                                    Ver alumnos
                                </a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">No tienes grupos asignados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
@stop
