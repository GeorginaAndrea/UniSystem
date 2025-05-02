<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Audit\LogCambio;
use App\Models\Facultad;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LogCambios extends Controller
{
    public function store(Request $request){
        
    }

    public function index(){
        $logs = LogCambio::paginate(10);
        return view('super-admin.auditoria.historial.index', compact('logs'));
    }

    public function show($log){
        
        $log = LogCambio::find($log);
        return view('super-admin.auditoria.historial.show',compact('log'));
    }
}
