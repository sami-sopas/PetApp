<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        //Traer caracteristicas de las mascotas para que se vean los filtros
        

        return view('livewire.navbar');
    }
}
