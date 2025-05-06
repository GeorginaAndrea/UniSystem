<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Roles
    $superAdmin = Role::firstOrCreate(['name' => 'super-admin']);
    $admin = Role::firstOrCreate(['name' => 'admin']);
    $alumno = Role::firstOrCreate(['name' => 'alumno']);
    $profesor = Role::firstOrCreate(['name' => 'profesor']);

    // Permisos por rol
    $permissions = [
        'super-admin' => [
            'super-admin.home',
            'super-admin.auditoria.historial.index',
            'super-admin.auditoria.historial.show',
            'super-admin.admin.index',
            'super-admin.admin.create',
            'super-admin.admin.edit',
            'super-admin.admin.destroy',
            
        ],
        'admin' => [
            'admin.home',
            ///permisos alumnos
            'admin.alumnos.index',
            'admin.alumnos.kardex',
            'admin.alumnos.create',
            'admin.alumnos.edit',
            'admin.alumnos.destroy',

            ///permisos profesores
            'admin.profesores.index',
            'admin.profesores.create',
            'admin.profesores.edit',
            'admin.profesores.destroy',

            ///permisos grupos
            'admin.grupos.index',
            'admin.grupos.create',
            'admin.grupos.show',
            'admin.grupos.edit',

            //permisos materias
            'admin.materias.index',
            'admin.materias.create',
            'amdin.materias.edit',

            ///permisos grupos materias
            'admin.grupomateria.index',
            'admin.grupomateria.edit',

            ///permisos kardex 
            'admin.kardex.index',
            

        ],
        'alumno' => [
            'alumnos.home',
            'alumnos.kardex',
        ],
        'profesor' => [
            'profesor.home',
            'profesor.show',
            'profesor.alumnos.index',
            'profesor.alumnos.edit',
            'profesor.materias.index',
        ],
    ];

    // Crear permisos
    foreach (array_merge(...array_values($permissions)) as $perm) {
        Permission::firstOrCreate(['name' => $perm]);
    }

    // Asignar permisos
    $superAdmin->syncPermissions($permissions['super-admin']);
    $admin->syncPermissions($permissions['admin']);
    $alumno->syncPermissions($permissions['alumno']);
    $profesor->syncPermissions($permissions['profesor']);



    }
}
