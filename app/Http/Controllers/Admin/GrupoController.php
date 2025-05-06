<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Grupo;
use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Facultad;
use App\Models\ProfesorGrupoMateria;
use App\Models\GrupoMateria;
use App\Models\Materia;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gruposAsignados = GrupoMateria::whereHas('asignaciones')->get();
        $gruposSinAsignar = GrupoMateria::whereDoesntHave('asignaciones')->get();
        $asignaciones = ProfesorGrupoMateria::with(['profesor', 'grupoMateria'])->get();
        $grupos = Grupo::orderBy('ClaveGrupo','asc')->paginate(10);
        return view('admin.grupos.index', compact('grupos','gruposAsignados','gruposSinAsignar','asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::all();
        $materias = Materia::all();
        return view('admin.grupos.create', compact('carreras', 'materias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'Nombre' => 'required|string|max:2', // Limitar nombre del grupo a dos caracteres
        //     'Semestre' => 'required|integer|min:1|max:12', // Semestre de 1 a 12
        //     'ClaveCarrera' => 'required|integer|exists:carrera,ClaveCarrera', // Asegurar que la clave de la carrera exista
        //     'materias_claves' => 'required|array'// Asegurar que la clave de la facultad exista
        // ],
        // [

        // ]);
        // try {
            
    
        //     $ultimoClave = Grupo::max('ClaveGrupo');
        //     $nuevaClaveGrupo = $ultimoClave ? $ultimoClave + 1 : 1;
    
        //     $grupo = Grupo::create([
        //         'ClaveGrupo' => $nuevaClaveGrupo,
        //         'Nombre' => $request->Nombre,
        //         'Semestre' => $request->Semestre,
        //         'ClaveCarrera' => $request->ClaveCarrera,
                
        //     ]);

        //     foreach ($request->materias_claves as $claveMateria) {
        //         GrupoMateria::create([
        //             'ClaveGrupo' => $grupo->ClaveGrupo,
        //             'ClaveMateria' => $claveMateria,
        //             'CupoMaximo' => $request->CupoMaximo ?? 30,
        //             'FechaInicio' => Carbon::now(),
        //             'FechaFin' => Carbon::now()->addMonths(5),
        //         ]);
        //     }



    
        //     return redirect()->route('admin.grupos.index')->with('success', 'Grupo creado exitosamente.');
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage())
        //         ->withInput();
        // }
        $grupo = Grupo::create([
            'Nombre' => $request->Nombre,
            'Semestre' => $request->Semestre,
            'ClaveCarrera' => $request->ClaveCarrera,
        ]);
        $grupo = Grupo::create($request->all());

        return redirect()->route('admin.gruposmaterias.create', $grupo->ClaveGrupo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Grupo $grupo)
    {
        $carreras = Carrera::pluck('NombreCarrera', 'ClaveCarrera');
        $facultades = Facultad::pluck('NombreFacultad', 'ClaveFacultad');
        return view('admin.grupos.show', compact('grupo', 'carreras', 'facultades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grupo $grupo)
    {
        return view('admin.grupos.edit', compact('grupo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grupo $grupo)
    {
        $validatedData =$request->validate([
            'Nombre' => 'sometimes|string|max:2',
            'Semestre' => 'sometimes|int|max:2'
        ]);

        $grupo-> update($validatedData);

        return redirect()->route('admin.grupos.show',$grupo)->with('success','Datos  actualizados exitosamente.' );
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grupo $grupo)
    {
        //
    }
}
