<?php

namespace App\Livewire;

use App\Models\Pet;
use App\Models\Type;
use Livewire\Component;

class Filter extends Component
{
    public function render()
    {
        //Traer datos para poder filtrar...

        //Categorias: perro o gato
        $types = Type::select('name')->get();

        //Tamaño
        $petSizes = Pet::select('size')->distinct()->get();

        //Sexo
        $petSex = Pet::select('sex')->get();




        return view('livewire.filter',compact(
            'types','petSizes','petSex'
        ));
    }
}