<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;

class PetList extends Component
{
    public $pets;

    //Opciones de filtros
    public $category;
    public $size;
    public $sex;
    public $state;
    public $tag;
    public $color;

    public function mount()
    {
        //Recuperar mascotas en adopcion que no sean perros ni gatos
        $this->pets = Pet::where('category_id','!=',1)
                         ->where('category_id','!=',2)
                         ->where('status',1)
                         ->get();
    }

    
    public function filter()
    {
        //Por defecto, aqui siempre buscaremos a los animales excepto perros y gatos en adopcion
        $query = Pet::where('category_id','!=',1)
                     ->where('category_id','!=',2)
                     ->where('status',1);

        //Tamaño
        if ($this->size != '') {
            $query = $query->where('size', $this->size);
        }

        //Sexo
        if ($this->sex != '') {
            $query = $query->where('sex', $this->sex);
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

        //Categoria
        if($this->category != '') {
            $query = $query->whereHas('category',function ($q) {
                $q->where('name',$this->category);
            });
        }

         // Imprimir la consulta SQL generada
         //dd($query->toSql(), $query->getBindings());

        $this->pets = $query->get();
    }

    
    public function resetFilters()
    {
        $this->pets = Pet::where('category_id','!=',1)
                         ->where('category_id','!=',2)
                         ->where('status',1)
                         ->get();


        $this->reset([
            'category',
            'size',
            'sex',
            'state',
            'tag',
            'color'
        ]);
    }

    public function render()
    {
        return view('livewire.pet-list');
    }
}
