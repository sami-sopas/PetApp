<?php

namespace App\Livewire;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\User;
use App\Models\Color;
use Livewire\Component;
use App\Models\Category;

class Filter extends Component
{
    public function render()
    {
        //Traer datos para poder filtrar...

        //Categorias: perro o gato
        $categories = Category::get();

        //Tamaño (con distinct, hacemos que no muestre repetidos)
        $petSizes = Pet::select('size')->distinct()->get();

        //Sexo 
        $petSex = Pet::select('sex')->distinct()->get();

        //Edad
        $petAges = Pet::select('age')->distinct()->get();

        //Ubicacion
        $states = User::get();

        //Tags/personalidad
        $petTags = Tag::get();

        //Colroes
        $colors = Color::get();




        return view('livewire.filter',compact(
            'categories','petSizes','petSex','petAges','states','petTags','colors'
        ));
    }
}