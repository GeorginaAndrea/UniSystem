@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.facultades.create')}}">Nueva Facultad</a>
    <h1>Facultades</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Editar</th>
                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facultades as $facultad)
                        <tr>
                            <td>{{ $facultad->ClaveFacultad }}</td>
                            <td>{{ $facultad->NombreFacultad }}</td>
                            <td>{{ $facultad->Direccion}}</td>
                            {{-- <td> <a  class="btn btn-primary btn-sm" href="{{route('admin.facultades.edit', $facultad->ClaveFacultad)}}">
                                Editar
                                </a>
                            </td> --}}
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

