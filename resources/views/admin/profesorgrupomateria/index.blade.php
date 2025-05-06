@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.grupos.index')}}">Volver</a>
    <h1>Nuevo Grupo</h1>
@stop

@section('content')
<form action="{{ route('admin.profesorgrupomateria.store', $grupo) }}" method="POST">
    @csrf
    <table class="table">
        <thead>
            <tr>
                <th>Materia</th>
                <th>Profesores</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grupomaterias as $gm)
                <tr>
                    <td>{{ $gm->materia->Nombre }}</td>
                    <td>
                        <select name="asignaciones[{{ $gm->ClaveGrupoMateria }}][]" class="form-control" multiple>
                            @foreach($profesores as $profesor)
                                <option value="{{ $profesor->ClaveProfesor }}">{{ $profesor->Nombre }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button class="btn btn-primary">Asignar profesores</button>
</form>


@stop


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop