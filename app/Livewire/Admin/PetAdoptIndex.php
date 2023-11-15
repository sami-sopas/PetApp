<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Pet;
use Livewire\WithPagination;

class PetAdoptIndex extends Component
{
    //Poder usar paginacion
    use WithPagination;

    //Vinculamos esta propiedad con el input
    public $search = '';

    //Metodo para que cuando busque, se retorne a la pagina 1 y busque desde ahi
    public function updatingSearch()
    {
        //El metodo se activa cuando la propiedad search cambia
        $this->resetPage();
    }

    public function render()
    {
        /* Componente para realizar busquedas dinamicas 
           y mostrar los datatables con al informacion 
        */

        //Recuperar todas las mascotas en adopcion (status = 2 (En adopcion))
        //$pets = Pet::where('status',2)
        //            ->where('name', 'LIKE','%' . $this->search . '%'); //Aqui hacemos que busque, de acuerdo a lo que escribio en la barra, el % indica que puede haber texto antes o despues de lo que escribio
                    //->paginate(8);


        return view('livewire.admin.pet-adopt-index',[
            'pets' => Pet::where('name','like', '%'.$this->search.'%')
                        ->paginate(10),
        ]);
    }
}
