<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Type;
use App\Models\Category;
use App\Models\Pet;
use App\Models\Tag;
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
        Storage::makeDirectory('pets'); //Volverla a creer, creando nuevas imgs

        //Aqui generamos los datos falsos, mediante un seeder

        //LLamamos al user seeder
        $this->call(UserSeeder::class);

        //Generar categorias
        Category::factory(4)->create();

        //Gemerar tipos
        Type::factory(4)->create();

        //Generar tags
        Tag::factory(5)->create();

        //LLamar al pet seeder
        $this->call(PetSeeder::class);

        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
