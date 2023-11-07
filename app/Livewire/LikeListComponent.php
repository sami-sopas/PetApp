<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;
use Livewire\Attributes\On;
use Gloudemans\Shoppingcart\Facades\Cart;

class LikeListComponent extends Component
{
    public $pets = [];

    /* En el cart solo tenemos almacenado el Id, nombre y edad de la mascota
        asi que aqui recuperaremos sus demas atributos
    */
    public function mount()
    {
        $this->pets = collect(); // Inicializa $pets como una colección vacía

        foreach(Cart::content() as $item)
        {
            $pet = Pet::where('id',$item->id)->first();
            $this->pets->push($pet); // Agrega la mascota a la colección
        }
    }
    
    public function removeFromLikeList($pet_id)
    {
        foreach(Cart::content() as $likeItem)
        {
            if($likeItem->id == $pet_id){
                Cart::remove($likeItem->rowId);
                $this->dispatch('render')->to(LikeComponent::class);
                $this->mount(); //Renderizar componente actual
                return;
            }
        }

    }
 
    public function render()
    {
        return view('livewire.like-list-component')->layout('layouts.app');
    }
}
