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
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:50|unique:carrera,Nombre',
                ]
            ,
            [
                'Nombre.unique' => 'Esta carrera ya está registrada'
            ]);
        try {
            
    
            $ultimoClave = Carrera::max('ClaveCarrera');
            $nuevaClaveCarrera = $ultimoClave ? $ultimoClave + 1 : 1;
    
            Carrera::create([
                'ClaveCarrera' => $nuevaClaveCarrera,
                'Nombre' => $validatedData['Nombre'],
            ]);
    
            return redirect()->route('admin.carreras.index')->with('success', 'Carrera creada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage())->withInput();
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
        return view('admin.carreras.edit', compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {

        $validatedData = $request->validate([
            'Nombre' => 'sometimes|string|max:50|unique:carrera,Nombre,'.$carrera->ClaveCarrera.',ClaveCarrera',
                ],
            [   
                'Nombre.unique' => 'Este nombre de carrera ya está en uso'

            ]);
            try {
                $carrera->update($validatedData);
                return redirect()->route('admin.carreras.show', $carrera)
                       ->with('success', 'Carrera actualizada exitosamente.');
            } catch (\Exception $e) {
                return redirect()->back()
                       ->with('error', 'Error al actualizar: ' . $e->getMessage())
                       ->withInput();
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
