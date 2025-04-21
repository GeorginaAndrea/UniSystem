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
    $role1 = Role::firstOrCreate(['name' => 'super-admin']);
    $role2 = Role::firstOrCreate(['name' => 'admin']);
    $role3 = Role::firstOrCreate(['name' => 'alumno']);
    $role4 = Role::firstOrCreate(['name' => 'profesor']);

    // Permisos por rol
    $permissions = [
        'super-admin' => [
            'super-admin.home',
            'super-admin.admin.index',
            'super-admin.admin.create',
            'super-admin.admin.edit',
            'super-admin.admin.destroy',
        ],
        'admin' => [
            'admin.home',
            'admin.alumnos.index',
            'admin.alumnos.kardex',
            'admin.alumnos.create',
            'admin.alumnos.edit',
            'admin.alumnos.destroy',
            'admin.profesores.index',
            'admin.profesores.create',
            'admin.profesores.edit',
            'admin.profesores.destroy',
        ],
        'alumno' => [
            'alumnos.home',
            'alumnos.show',
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
    $role1->syncPermissions($permissions['super-admin']);
    $role2->syncPermissions($permissions['admin']);
    $role3->syncPermissions($permissions['alumno']);
    $role4->syncPermissions($permissions['profesor']);



    }
}
