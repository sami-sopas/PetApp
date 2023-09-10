<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;


class PetController extends Controller
{
    //Aqui controlaremos las publicaciones
    public function index()
    {
        //Recuperar registros de mascotas perdidos,
        //Hacemos que se muestren los ultimos con latest, y hacemos paginacion
        $pets = Pet::where('status',1)->latest('id')->paginate(8);
        
        //Le pasamos esos registros a la vista
        return view('pets.index',compact('pets'));
    }

    //Recibimos un pet en la funcion como parametro
    public function show(Pet $pet)
    {
        //Mostramos esa vista-detalle, enviandole el obj pet
        return view('pets.show',compact('pet'));
    }
}
