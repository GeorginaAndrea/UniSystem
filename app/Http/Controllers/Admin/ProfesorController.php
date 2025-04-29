<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facultad;
use App\Models\Profesor;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facultades = Facultad::all('NombreFacultad');
        $profesores = Profesor::orderBy('Nombres','asc')->paginate(10);
        return view('admin.profesores.index',compact('profesores', 'facultades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'ApePaterno' => 'required|string|max:100',
                'ApeMaterno' => 'required|string|max:100',
                'Nombres' => 'required|string|max:100',
                'Email' => 'required|email|max:100',
                'Telefono' => 'nullable|string|max:15',
                'ClaveFacultad' => 'required|integer',
            ]);

            $claveProfesor = 'PROF' . strtoupper(Str::random(8));

            $profesor = Profesor::create([
                'ClaveProfesor' => $claveProfesor,
                'ApePaterno' => $validatedData['ApePaterno'],
                'ApeMaterno' => $validatedData['ApeMaterno'],
                'Nombres' => $validatedData['Nombres'],
                'Email' => $validatedData['Email'],
                'Telefono' => $validatedData['Telefono'],
                'ClaveFacultad' => $validatedData['ClaveFacultad'],
            ]);

            return redirect('/profesores')->with('success', 'Profesor creado exitosamente.');
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrio un error: ' . $e->getMessage());
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        return view('admin.profesores.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        return view('admin.profesores.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        //
    }
}
