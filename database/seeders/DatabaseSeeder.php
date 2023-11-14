<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\Category;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage; //Para crear una carpeta

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('pets'); //Eliminar carpeta
        Storage::makeDirectory('pets'); //Volverla a crear, creando nuevas imgs

        //Aqui generamos los datos falsos, mediante un seeder

        //Primero generamos la tabla con los 32 estados
        $this->call(StateSeeder::class);

        //LLamamos al user seeder (a cada uno se le asigna un estado)
        $this->call(UserSeeder::class);

        //Crear categorias principales
        Category::create([
            'name' => 'Perros'
        ]);
        Category::create([
            'name' => 'Gatos'
        ]);
        Category::create([
            'name' => 'Pajaros'
        ]);
        Category::create([
            'name' => 'Roedores'
        ]);

        //Generar colores
        Color::factory(5)->create();

        //Generar tags
        Tag::factory(5)->create();

        //LLamar al pet seeder
        $this->call(PetSeeder::class);

    }
}
