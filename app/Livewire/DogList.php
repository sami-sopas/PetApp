<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class DogList extends Component
{
    public $dogs;

    public function mount()
    {
        //Recueperar perros en adopcion
        $this->dogs = Pet::where('status', 2)->where('category_id', 2)->get();
    }

    public function addToLikeList($pet_id,$pet_name)
    {
        Cart::add($pet_id, $pet_name, 1, 1)->associate(Pet::class);

        //Emitir evento para que se actualize el icono
        $this->dispatch('render')->to(LikeComponent::class);
    }

    public function removeFromLikeList($pet_id)
    {
        foreach(Cart::content() as $likeItem)
        {
            if($likeItem->id == $pet_id){
                Cart::remove($likeItem->rowId);
                $this->dispatch('render')->to(LikeComponent::class);
                return;
            }
        }

    }

    public function render()
    {
        //Perros en adopcion
        //$dogs = Pet::where('status',2)->where('category_id',2)->get();

        return view('livewire.dog-list');
    }
}
