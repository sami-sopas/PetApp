<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;

class DogList extends Component
{

    // Propiedades para opciones de filtro
    public $sizeOptions;
    public $sexOptions;
    public $ageOptions;

    //Propiedades por las que se podra filtrar
    public $size;
    public $sex;
    public $age;

    public $dogs;

    public function mount()
    {
        // Obtén y establece todos los perros en adopción como resultados predeterminados
        $this->dogs = Pet::where('status', 2)->where('category_id', 2)->get();

        //Opciones de los dropdowns
        $this->sizeOptions =  Pet::select('size')->distinct()->get();

        $this->sexOptions = Pet::select('sex')->distinct()->get();

        $this->ageOptions = Pet::select('age')->distinct()->get();
    }

    public function filter()
    {

        $query = Pet::where('status', 2)->where('category_id', 2);

        if ($this->size) {
            $query->where('size', $this->size);
        }

        if ($this->sex) {
            $query->where('sex', $this->sex);
        }

        if ($this->age) {
            $query->where('age', $this->age);
        }

        $this->dogs = $query->get();
    }


    public function render()
    {
        //Perros en adopcion
        //$dogs = Pet::where('status',2)->where('category_id',2)->get();

        return view('livewire.dog-list', [
            'dogs' => $this->dogs,
        ]);

    }
}
