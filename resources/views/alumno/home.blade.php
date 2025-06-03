@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido de vuelta, {{ $alumno->Nombres }}</h1>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Tus Datos</h3>
                </div>

                <div class="card-body">
                    <p><strong>Clave Alumno:</strong> {{ $alumno->ClaveAlumno }}</p>
                    <p><strong>Nombre:</strong> {{ $alumno->Nombres }} {{ $alumno->ApePaterno }} {{ $alumno->ApeMaterno }}</p>
                    <p><strong>Correo Electrónico:</strong> {{ $alumno->Email }}</p>
                    <p><strong>Teléfono:</strong> {{ $alumno->Telefono }}</p>
                    <p><strong>Curp:</strong> {{ $alumno->Curp }}</p>
                    <p><strong>Carrera:</strong> {{ optional($alumno->carrera)->NombreCarrera ?? 'No asignada' }}</p>
                </div>

                
            </div>

        </div>
    </div>
    
@stop
