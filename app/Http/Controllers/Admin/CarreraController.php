<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras = Carrera::orderBy('Nombre','asc')->paginate(10);
        return view('admin.carreras.index',compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Nombre' => 'required|string|max:50',
            ]);
    
            $ultimoClave = Carrera::max('ClaveCarrera');
            $nuevaClaveCarrera = $ultimoClave ? $ultimoClave + 1 : 1;
    
            Carrera::create([
                'ClaveCarrera' => $nuevaClaveCarrera,
                'Nombre' => $request->Nombre,
            ]);
    
            return redirect()->route('admin.carreras.index')->with('success', 'Carrera creada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        return view('admin.carreras.show', compact('carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrera $carrera)
    {
        return view('admin.carreras.show', compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {
        try {
            $validatedData = $request->validate([
                'Nombre' => 'sometimes|string|max:100'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }

        $carrera = Carrera::findOrfail($carrera);

        try {
            $carrera->Nombre =$request->Nombre;

            $carrera->save();
            return redirect("/carreras/{$carrera->ClaveCarrera}")->with('success', 'Datos actualizados exitosamente.' );
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrio un error al actualizar los datos:' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        //
    }
}
