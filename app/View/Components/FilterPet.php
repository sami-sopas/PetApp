<?php

namespace App\View\Components;

use Closure;
use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FilterPet extends Component
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
        //Categoria (Descartamos perros y gatos)
        $categoryOptions = Category::where('id','!=',1)
                                    ->where('id','!=',2)
                                    ->get();

        //Ubicacion
        $stateOptions = State::get();

        //Tags/personalidad
        $tagOptions = Tag::get();

        //Colroes
        $colorOptions = Color::get();
    
        
        return view('components.filter-pet',compact(
            'categoryOptions','stateOptions','tagOptions','colorOptions'));
    }
}
