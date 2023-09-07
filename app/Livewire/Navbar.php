<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category; //Importamos el modelo de categoria

class Navbar extends Component
{
    public function render()
    {
        //Rescatamos todas las categorias
        $categories = Category::all();

        //Se las pasamos a la vista, para mostrar Perdido, En adopcion etc
        return view('livewire.navbar',compact('categories'));
    }
}
