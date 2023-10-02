<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear un admin por defecto
        User::create([
            'name' => 'prueba',
            'email' => 'prueba@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '11-22-33-44-55',
            'state_id' => '1',
            'role' => 'admin',
        ]);
        //Crear registros falsos
        User::factory(5)->create();
    }
}
