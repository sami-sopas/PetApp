<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Pet;
use Livewire\Component;

class Filter extends Component
{
    public function render()
    {
        //Traer datos para poder filtrar...

        //Categorias: perro o gato
        $categories = Category::select('name')->get();

        //Tamaño
        $petSizes = Pet::select('size')->distinct()->get();

        //Sexo
        $petSex = Pet::select('sex')->get();




        return view('livewire.filter',compact(
            'categories','petSizes','petSex'
        ));
    }
}