<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class AdoptPetController extends Controller
{
    public function index()
    {
        //Recuperar registros de mascotas en adopcion(2),
        //Hacemos que se muestren los ultimos con latest, y hacemos paginacion
        $pets = Pet::where('status', 2)->latest('id')->paginate(8);

        return view('adopt.index', compact('pets'));
    }

    //Recibimos un pet en la funcion como parametro
    public function show(Pet $pet)
    {
        //Mostramos pets similares en base a su estatus
        $similars = Pet::where('status', $pet->status) //lo que estan perdidos
            ->where('id', '!=', $pet->id) //mostrar relacionados distintos, al que tenemos actualmente
            ->latest('id') //traer los ultimos mediante segun su id
            ->take(4) //solo traer otras 4 opciones
            ->get();

        //Mostramos esa vista-detalle, enviandole el obj pet al que dio click y otros similares
        return view('lost.show', compact('pet', 'similars'));
    }

    public function search(Request $request)
    {
        //Primero, filtrar los que estan en adopcion
        $query = Pet::where('status', 2);

        //Primero validaremos las tablas que se conectan a pets

        //El value de la categoria que se envia es el ID, asi que aqui se valida
        // Validando las categorias
        if ($request->has('category')) {
            $categoryId = $request->input('category');

            // Si se ha seleccionado "Todos", no aplicar el filtro de categoría
            if ($categoryId !== 'all') {
                $query->where('category_id', $categoryId);
            }
        }

        // Validando los colores
        if ($request->has('color')) {
            $selectedColor = $request->input('color');

            // Si se ha seleccionado "Todos", no aplicar el filtro de color
            if ($selectedColor !== 'all') {
                $query->whereHas('color', function ($q) use ($selectedColor) {
                    $q->where('id', $selectedColor);
                });
            }
        }

        //Para los tags
        if ($request->has('tags')) {
            $selectedTags = $request->input('tags');

            // Filtrar las mascotas que tienen al menos una de las etiquetas seleccionadas
            $query->whereHas('tags', function ($q) use ($selectedTags) {
                $q->whereIn('tags.id', $selectedTags);
            });
        }

        //Para el estado de donde es la mascota
        if ($request->has('state')) {
            $selectedState = $request->input('state');
        
            // Si se ha seleccionado "Todos", no aplicar el filtro de estados
            if ($selectedState !== 'all') {
                $query->whereHas('user', function ($q) use ($selectedState) {
                    $q->where('state', $selectedState);
                });
            }
        }
        

        
        //Ahora si, filtrar las columnas que pertenecen a la misma tabla pet...


        // Validando el tamaño
        if ($request->input('size') != 'all') {
            $query->where('size', $request->input('size'));
        }

        //Validando el sexo
        if ($request->input('sex') != 'all') {
            $query->where('sex',$request->input('sex'));
        }

        //Validando la edad
        if ($request->input('age') != 'all') {
            $query->where('age',$request->input('age'));
        }


    


        //Enviar a la vista en el AdoptIndex, las mascotas con los filtros aplicados
        $pets = $query->latest('id')->paginate(8);

        return view('adopt.index', compact('pets'));
    }

    //Retorna la vista para dar en adopcion
    public function create()
    {
        return view('adopt.create');
    }
}
