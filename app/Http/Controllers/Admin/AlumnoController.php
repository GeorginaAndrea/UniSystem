<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\Facultad;
use Illuminate\Support\Str;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('ClaveAlumno','asc')->paginate(10);
        return view('admin.alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::pluck('ClaveCarrera', 'Nombre');
        $facultades = Facultad::pluck('NombreFacultad', 'ClaveFacultad');
        return view('admin.alumnos.create', compact('facultades', 'carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validar los datos del formulario
            $validatedData = $request->validate([
                'ApePaterno' => 'required|string|max:100',
                'ApeMaterno' => 'required|string|max:100',
                'Nombres' => 'required|string|max:100',
                'Curp' => 'required|string|max:18|unique:alumnos,Curp',
                'Genero' => 'required|string|max:10',
                'EstCivil' => 'required|string|max:20',
                'FechaNacimiento' => 'required|date',
                'Email' => 'required|email|max:100',
                'Celular' => 'required|string|max:15',
                'Estado' => 'required|string|max:50',
                'Municipio' => 'required|string|max:50',
                'Colonia' => 'required|string|max:50',
                'Direccion' => 'required|string|max:100',
                'Telefono' => 'nullable|string|max:15',
                'ClaveFacultad' => 'required|integer',
                'ClaveCarrera' => 'required|integer',
            ]);
    
            // Generar ClaveAlumno de forma automática
            $claveAlumno = 'ALU' . strtoupper(Str::random(8));
    
            // Crear el alumno
            $alumno = Alumno::create([
                'ClaveAlumno' => $claveAlumno,
                'ApePaterno' => $validatedData['ApePaterno'],
                'ApeMaterno' => $validatedData['ApeMaterno'],
                'Nombres' => $validatedData['Nombres'],
                'Curp' => $validatedData['Curp'],
                'Genero' => $validatedData['Genero'],
                'EstCivil' => $validatedData['EstCivil'],
                'FechaNacimiento' => $validatedData['FechaNacimiento'],
                'Email' => $validatedData['Email'],
                'Celular' => $validatedData['Celular'],
                'Estado' => $validatedData['Estado'],
                'Municipio' => $validatedData['Municipio'],
                'Colonia' => $validatedData['Colonia'],
                'Direccion' => $validatedData['Direccion'],
                'Telefono' => $validatedData['Telefono'] ?? null,
                'ClaveFacultad' => $validatedData['ClaveFacultad'],
                'ClaveCarrera' => $validatedData['ClaveCarrera'],
            ]);
    
            return redirect()->route('admin.alumnos.index')->with('success', 'Alumno creado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('admin.alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('admin.alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        try {
            // Validación de datos (campos opcionales para archivos)
            $validatedData = $request->validate([
                'ClaveAlumno' => 'sometimes|string|max:100',
                'ApePaterno' => 'sometimes|string|max:100', // Opcional
                'ApeMaterno' => 'sometimes|string|max:100',
                'Nombres' => 'sometimes|string|max:50', // Opcional
                'EstCivil' => 'sometimes|string|max:20',
                'Estado' => 'sometimes|string|max:15',
                'Municipio' => 'sometimes|string|max:40',
                'Colonia' => 'sometimes|string|max:50',
                'Direccion' => 'sometimes|string|max:150',
                'Telefono' => 'sometimes|string|max:150',
                'Celular' => 'sometimes|string|max:10',
                'Email' => 'sometimes|email|max:100',
                'FechaNacimiento' => 'sometimes|date',
            
                
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        // Buscar el libro a actualizar
        $alumno = Alumno::findOrFail($alumno);
        
        try {
            $alumno->ApePaterno =$request->ApePaterno;
            $alumno->ApeMaterno =$request->ApeMaterno;
            $alumno->Nombres =$request->Nombres;
            $alumno->Curp =$request->Curp;
            $alumno->Genero =$request->Genero;
            $alumno->EstCivil =$request->EstCivil;
            $alumno->FechaNacimiento =$request->FechaNacimiento;
            $alumno->Email =$request->Email;
            $alumno->Celular =$request->Celular;
            $alumno->Estado =$request->Estado;
            $alumno->Municipio =$request->Municipio;
            $alumno->Colonia =$request->Colonia;
            $alumno->Direccion =$request->Direccion;
            $alumno->Telefono =$request->Telefono;
        
            $alumno->save();
            return redirect("/alumnos/{$alumno->id}")->with('success', 'Datos actualizados exitosamente.');

        
        } catch (\Exception $e) {
            // Manejar cualquier error inesperado
            return redirect()->back()->with('error', 'Ocurrió un error al actualizar los datos: ' . $e->getMessage());
        }

        

            // $book->authors()->sync($request->author_ids);
            // $book->categories()->sync($request->category_ids);
            // $book->collections()->sync($request->collection_ids);


            // Redirigir con un mensaje de éxito
           
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
