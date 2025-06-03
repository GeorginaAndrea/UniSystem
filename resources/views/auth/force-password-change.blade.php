@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Cambio de contraseña requerido</h4>
    <p>Por motivos de seguridad, debes cambiar tu contraseña para continuar.</p>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Aquí pones los campos actuales de tu formulario de cambio de contraseña -->
        <div class="form-group">
            <label>Nueva contraseña</label>
            <input type="password" name="password" required class="form-control">
        </div>

        <div class="form-group">
            <label>Confirmar contraseña</label>
            <input type="password" name="password_confirmation" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar contraseña</button>
    </form>
</div>
@endsection
