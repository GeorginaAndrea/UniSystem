<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Audit\Sesion;
use Illuminate\Http\Request;

class Sesiones extends Controller
{
    public function index() {
        $sesiones = Sesion::with(['usuario', 'dispositivo'])->orderBy('fecha_login', 'desc')->paginate(10);
        return view('super-admin.auditoria.sesiones.index', compact('sesiones'));
    }
}
