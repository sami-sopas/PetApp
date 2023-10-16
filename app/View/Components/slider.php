<?php

namespace App\View\Components;

use Closure;
use App\Models\Pet;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class slider extends Component
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
        //Recuperamos los ultimos pets en adopcion en base a su ID
         $pets = Pet::orderBy('id','desc')->where('status',2)->take(5)->get();

        return view('components.slider',compact('pets'));
    }
}
