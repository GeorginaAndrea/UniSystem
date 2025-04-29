<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facultades = Facultad::orderBy('NombreFacultad','asc')->paginate(10);
        return view('admin.facultades.index',compact('facultades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facultades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            
        try {
            $validatedData = $request->validate([
                'NombreFacultad' => 'required|string|max:100',
                'Direccion' => 'required|string|max:100',
            ]);

            $ultimoClave = Facultad::max('ClaveFacultad');
            $nuevaClaveFacultad = $ultimoClave ? $ultimoClave + 1 : 1;

            Facultad::create([
                'ClaveFacultad' => $nuevaClaveFacultad,
                'NombreFacultad' => $request->NombreFacultad,
                'Direccion' => $request->Direccion,
            ]);

            return redirect()->route('admin.facultades.index')->with('success', 'Facultad creada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Facultad $facultad)
    {
        return view('admin.facultades.show', compact('facultad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facultad $facultad)
    {
        return view('admin.facultades.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facultad $facultad)
    {
        try {
            $validatedData = $request->validate([
                'Nombre'=> 'sometimes|string|max:100',
                'Direccion' =>'sometimes|string|max:100'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }

        $facultad = Facultad::findOrFail($facultad);

        try {
            $facultad->Nombre =$request->Nombre;
            $facultad->Direccion =$request->Direccion;

            $facultad->save();
            return redirect("/facultades/{$facultad->ClaveFacultad}")->with('success', 'Datos actualizados exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error' , 'Ocurrio un error al actualizar los datos: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facultad $facultad)
    {
        //
    }
}
