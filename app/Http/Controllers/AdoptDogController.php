<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use Illuminate\Http\Request;

class AdoptDogController extends Controller
{

    //En request recibimos los parametros de los filtros
    public function index(Request $request)
    {
        //Recuperar perros en adopcion
        //$dogs = Pet::where('status', 2)->where('category_id', 2)->get();

        //dd($request);
        $dogs = Pet::where('status',2)
                    ->where('category_id',2)
                       //Tamaño
                    ->when($request->size != null, function($query) use ($request) {
                        return $query->where('size',$request->size);
                    }) //Sexo
                    ->when($request->sex != null, function($query) use ($request) {
                        return $query->where('sex',$request->sex);
                    }) //Edad
                    ->when($request->age != null, function($query) use ($request) {
                        return $query->where('age',$request->age);
                    }) //Color
                    ->when($request->color, function ($query) use ($request) {
                        return $query->whereHas('color', function ($q) use ($request) {
                            $q->where('name', $request->color);
                        });
                    }) //Tags
                    ->when($request->tag != null, function ($query) use ($request) {
                        return $query->whereHas('tags', function ($q) use ($request) {
                            $q->where('tags.name', $request->tag);
                        });
                    }) //Estados
                    ->when($request->state, function ($query) use ($request) {
                        return $query->whereHas('user.state', function ($q) use ($request) {
                            $q->where('name', $request->state);
                        });
                    })
                    ->get();

        return view('adopt-dog.index',compact('dogs'));
    }

    public function create()
    {

        //Informacion a mostrar en el form
        $colors = Color::all();

        $sizes = Pet::select('size')->distinct()->get();

        $ages = Pet::select('age')->distinct()->get();

        $states = State::all();

        $tags = Tag::all();

        $sexs = Pet::select('sex')->distinct()->get();


        return view('adopt-dog.create');

    }
}
