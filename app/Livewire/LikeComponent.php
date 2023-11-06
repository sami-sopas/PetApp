<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;
use Livewire\Attributes\On;
use Gloudemans\Shoppingcart\Facades\Cart;

class LikeComponent extends Component
{

    //Cuando se agregue uno nuevo, quedaremos a la escucha de ese evento aqui
    #[On('render')] 
    public function render()
    {
        return view('livewire.like-component');
    }
}
