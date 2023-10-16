<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\PostDec;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear los registros de pets, los almacenamos en una variable
        $pets = Pet::factory(50)->create();

        //Recorrer para que por cada pet, se agrege su imagen y se almacenen en esa tabla
        foreach($pets as $pet)
        {
            Image::factory(1)->create([
                'imageable_id' => $pet->id,
                'imageable_type' => Pet::class,
            ]);

            //Insertando registros en la tabla auxiliar de pet_tag
            /* attach agrega un nuevo registro en la tabla pet_tag
               en tag_id va colocar el valor definido en el parentesis
               en pet_id va recuperar el id del pet que tenemos en la variable $pet
               podemos colocar un array para asignar varias etiquetas (en este caso 2)
               con rand las asignaremos al azar */
            $pet->tags()->attach([
                rand(1,2),
                rand(3,5)
            ]); 

            /*
            Tag con relacion polimorfica: 
            foreach ($posts as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);

            $post->tags()->attach(
                rand(1,6),
                [
                    'taggable_id' => $post->id,
                    'taggable_type' => Post::class
                ]
            );
            $post->tags()->attach(
                rand(6,12),
                [
                    'taggable_id' => $post->id,
                    'taggable_type' => Post::class
                ]
            );
        }
            */
        }
    }
}
