<?php

namespace App\Http\Controllers\User;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::where('user_id',Auth()->user()->id)->get();

        return view('post.index',compact('pets'));
    }

    public function edit(Pet $pet)
    {
  
        //Informacion a mostrar en el form
        $categories = Category::all();
        $colors = Color::all();
        $statuses = Pet::select('status')->distinct()->get();
        $sizes = Pet::select('size')->distinct()->get();
        $ages = Pet::select('age')->distinct()->get();
        $states = State::all();
        $tags = Tag::all();
        $sexs = Pet::select('sex')->distinct()->get();

        return view('post.edit', compact(
            'pet',
            'categories',
            'colors',
            'statuses',
            'sizes',
            'ages',
            'states',
            'tags',
            'sexs'
        ));
    }
}
