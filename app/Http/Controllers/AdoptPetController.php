<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use App\Models\Category;
use Illuminate\Http\Request;

class AdoptPetController extends Controller
{
    public function index()
    {

        return view('adopt-pet.index');

    }

    public function create()
    {

        //Informacion a mostrar en el form

        //Las categorias que podra cambiar son solo para mascotas que no sean cat o dog
        $categories = Category::where('id','!=',1)->where('id','!=',2)->get();

        $colors = Color::all();

        $sizes = Pet::select('size')->distinct()->get();

        $states = State::all();

        $tags = Tag::all();

        $sexs = Pet::select('sex')->distinct()->get();

        $bg_colors = Pet::select('bg_color')->distinct()->get();

        $icons = Pet::select('icon')->distinct()->get();


        return view('adopt-pet.create',compact(
            'categories',
            'colors',
            'sizes',
            'states',
            'tags',
            'sexs',
            'bg_colors',
            'icons',
        ));

    }

}
