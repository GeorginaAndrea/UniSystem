@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido de vuelta, {{ $profesor->Nombres }}</h1>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Tus Datos</h3>
                </div>

                <div class="card-body">
                    <p><strong>Clave Profesor:</strong> {{ $profesor->ClaveProfesor }}</p>
                    <p><strong>Nombre:</strong> {{ $profesor->Nombres }} {{ $profesor->ApePaterno }} {{ $profesor->ApeMaterno }}</p>
                    <p><strong>Correo Electrónico:</strong> {{ $profesor->Email }}</p>
                    <p><strong>Teléfono:</strong> {{ $profesor->Telefono }}</p>
                    <p><strong>Departamento:</strong> {{ $profesor->Departamento }}</p>
                    <p><strong>Facultad:</strong> {{ optional($profesor->facultad)->NombreFacultad ?? 'No asignada' }}</p>
                </div>

                
            </div>

        </div>
    </div>
    
@stop
