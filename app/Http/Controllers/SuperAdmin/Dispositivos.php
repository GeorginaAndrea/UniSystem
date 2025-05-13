<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Audit\Dispositivo;
use Illuminate\Http\Request;

class Dispositivos extends Controller
{
    public function index() {
         $dispositivos = Dispositivo::with(['usuario'])->get();
        return view('super-admin.auditoria.dispositivos.index', compact('dispositivos'));
    }
}
