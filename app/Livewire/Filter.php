<?php

namespace App\Livewire;

use App\Models\Pet;
use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Models\Tag;

class Filter extends Component
{
    public function render()
    {
        //Traer datos para poder filtrar...

        //Categorias: perro o gato
        $categories = Category::select('name')->get();

        //Tamaño (con distinct, hacemos que no muestre repetidos)
        $petSizes = Pet::select('size')->distinct()->get();

        //Sexo 
        $petSex = Pet::select('sex')->distinct()->get();

        //Edad
        $petAges = Pet::select('age')->distinct()->get();

        //Ubicacion
        $states = User::select('state')->distinct()->get();

        //Tags/personalidad
        $petTags = Tag::select('name')->distinct()->get();




        return view('livewire.filter',compact(
            'categories','petSizes','petSex','petAges','states','petTags'
        ));
    }
}