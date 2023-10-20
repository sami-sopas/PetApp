<?php

namespace App\View\Components;

use Closure;
use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FilterDogCat extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
       //Le enviamos todas las opcines que podra elegir de los filtros

        // // Obtén y establece todos los perros en adopción como resultados predeterminados
        // //Recibe la categoria, para mostrar ya sea perro o gato y ahi empezamos a formar el query
        // $query = Pet::where('status', 2)->where('category_id', $this->category)->get();

        // //Opciones de los dropdowns
        // $sizeOptions =  Pet::select('size')->distinct()->get();

        // $sexOptions = Pet::select('sex')->distinct()->get();

        // $ageOptions = Pet::select('age')->distinct()->get();

        $sizeOptions =  Pet::select('size')->distinct()->get();

        $sexOptions = Pet::select('sex')->distinct()->get();

        $ageOptions = Pet::select('age')->distinct()->get();

        //Estados
        $stateOptions = State::get();

        //Tags/personalidad
        $tagOptions = Tag::get();

        //Colroes
        $colorOptions = Color::get();
        
        return view('components.filter-dog-cat',compact(
            'sizeOptions','sexOptions','ageOptions','stateOptions','tagOptions','colorOptions'));
    }
}
