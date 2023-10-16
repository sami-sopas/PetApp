<?php

namespace App\Livewire;

use App\Models\Pet;
use App\Models\Tag;
use Livewire\Component;

class DogList extends Component
{

    public function mount()
    {
        //Mostrar por defecto todos los perros
    }

    public function render()
    {
        //Perros en adopcion
        $dogs = Pet::where('status',2)->where('category_id',2)->get();

        //Tags disponibles
        $tags = Tag::all();

        return view('livewire.dog-list',compact('dogs','tags'));
    }
}
