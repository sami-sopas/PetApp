<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class DogList extends Component
{
    public $dogs;

    //opciones de filtro
    public $size;
    public $sex;
    public $age;
    public $state;
    public $tag;
    public $color;

    public function mount()
    {
        //Recueperar perros en adopcion
        $this->dogs = Pet::where('category_id',1)->where('status',1)->get();

    }

    public function filter()
    {
        //Por defecto, aqui siempre buscaremos a los perros en adopcion
        $query = Pet::where('category_id',1)
                     ->where('status',1);

        //Tamaño
        if ($this->size != '') {
            $query = $query->where('size', $this->size);
        }

        //Sexo
        if ($this->sex != '') {
            $query = $query->where('sex', $this->sex);
        }

        //Edad
        if ($this->age != '') {
            $query = $query->where('age', $this->age);
        }

        //Estado (de acuerdo al usuario que creo la publicacion)
        if ($this->state != '') {
            $query = $query->whereHas('user.state', function ($q) {
                $q->where('name', $this->state);
            });
        }

        //Tags (tabla de N:N)
        if ($this->tag != '') {
            $query = $query->whereHas('tags', function ($q) {
                $q->where('name', $this->tag);
            });
        }

        //Color
        if ($this->color != '') {
            $query = $query->whereHas('color', function ($q) {
                $q->where('name', $this->color);
            });
        }

        $this->dogs = $query->get();
    }

    public function resetFilters()
    {
        $this->dogs = Pet::where('category_id',1)->where('status',1)->get();


        $this->reset([
            'size',
            'sex',
            'age',
            'state',
            'tag',
            'color'
        ]);
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
