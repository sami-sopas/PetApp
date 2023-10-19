<?php

namespace App\Http\Controllers;

use App\Models\Pet;
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
                    ->where('status', 2)
                    ->where('category_id', 2)
                    ->get();

        return view('adopt-dog.index',compact('dogs'));
    }

    public function show(Pet $dog)
    {
        $similars = Pet::where('category_id',2)
                     ->where('status',2)
                     ->where('id','!=',$dog->id)
                     ->latest('id')
                     ->take(6)
                     ->get();

        return view('adopt-dog.show',compact('dog','similars'));
    }

    public function filter(Request $request)
    {
        // Inicializa la consulta con los perros en adopción
        $query = Pet::where('status', 2)->where('category_id', 2)->get();

        // Filtrar por tamaño
        if ($request->has('size') && $request->input('size') !== 'all') {
            $query->where('size', $request->input('size'));
        }

        // Filtrar por sexo
        if ($request->has('sex') && $request->input('sex') !== 'all') {
            $query->where('sex', $request->input('sex'));
        }

        // Filtrar por edad
        if ($request->has('age') && $request->input('age') !== 'all') {
            $query->where('age', $request->input('age'));
        }

            // Obtén los resultados
        $dogs = $query;

        return view('adopt-dog.index',compact('dogs'));
    }
}
