<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materia')->where('Nombre', 'Programación I')->update([
            'Semestre' => 1,
            'ClaveCarrera' => 1
        ]);
        DB::table('materia')->where('Nombre', 'Anatomía Humana')->update([
            'Semestre' => 3,
            'ClaveCarrera' => 3
        ]);
        DB::table('materia')->where('Nombre', 'Derecho Constitucional')->update([
            'Semestre' => 5,
            'ClaveCarrera' => 4
        ]);
        DB::table('materia')->where('Nombre', 'Contabilidad Básica')->update([
            'Semestre' => 1,
            'ClaveCarrera' => 2
        ]);
        DB::table('materia')->where('Nombre', 'Diseño Digital')->update([
            'Semestre' => 1,
            'ClaveCarrera' => 6
        ]);
        DB::table('materia')->where('Nombre', 'Cálculo Diferencial')->update([
            'Semestre' => 1,
            'ClaveCarrera' => 7
        ]);
        DB::table('materia')->where('Nombre', 'Psicología General')->update([
            'Semestre' => 7,
            'ClaveCarrera' => 5
        ]);
        DB::table('materia')->where('Nombre', 'Derecho Civil')->update([
            'Semestre' => 7,
            'ClaveCarrera' => 5
        ]);
        DB::table('materia')->where('Nombre', 'Finanzas Corporativas')->update([
            'Semestre' => 1,
            'ClaveCarrera' => 2
        ]);
        DB::table('materia')->where('Nombre', 'Historia del Arte')->update([
            'Semestre' => 1,
            'ClaveCarrera' => 6
        ]);
    }
}
