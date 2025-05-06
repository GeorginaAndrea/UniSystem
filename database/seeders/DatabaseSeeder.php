<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        // User::factory(10)->create();

        //Super admin prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test2@gmail.com',
            'password' => bcrypt('admin123'),
        ])->assignRole('super-admin');

        //Admin prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test_admin@gmail.com',
            'password' => bcrypt('admin123'),
        ])->assignRole('admin');

        //Alumno prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test_alumno@gmail.com',
            'password' => bcrypt('alumno123'),
        ])->assignRole('alumno');

        //Profesor prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test_profesor@gmail.com',
            'password' => bcrypt('profesor123'),
        ])->assignRole('profesor');
        
    }
}
