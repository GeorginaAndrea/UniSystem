<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Audit\LogCambio;
use App\Models\Facultad;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;

class LogCambios extends Controller
{
    public function store(Request $request){
        
    }

    public function index(){
        $logs = LogCambio::orderBy('fecha','desc')->paginate(10);
        $usuarioIds = $logs->pluck('usuario_id')->unique();
            $usuarios = User::on('mysql') // o la conexión donde está la tabla users
                ->whereIn('id', $usuarioIds)
                ->get()
                ->keyBy('id');
        
        return view('super-admin.auditoria.historial.index', compact('logs','usuarioIds'));
    }

    public function show($log){
        
        $log = LogCambio::find($log);
        return view('super-admin.auditoria.historial.show',compact('log'));
    }
}
