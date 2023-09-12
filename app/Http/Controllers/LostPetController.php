<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;


class LostPetController extends Controller
{
    //Aqui controlaremos las publicaciones
    public function index()
    {
        //Recuperar registros de mascotas perdidos(1),
        //Hacemos que se muestren los ultimos con latest, y hacemos paginacion
        $pets = Pet::where('status',1)->latest('id')->paginate(8);
        
        //Le pasamos esos registros a la vista
        return view('lost.index',compact('pets'));
    }

    //Recibimos un pet en la funcion como parametro
    public function show(Pet $pet)
    {
        //Mostramos pets similares en base a su categoria, su estatus
        $similars = Pet::where('category_id',$pet->category_id)
        ->where('status',1) //los que estan perdidos
        ->where('id','!=',$pet->id)//mostrar relacionados distintos, al que tenemos actualmente
        ->latest('id') //traer los ultimos mediante segun su id
        ->take(4) //solo traer otras 4 opciones
        ->get();

        //Mostramos esa vista-detalle, enviandole el obj pet al que dio click y otros similares
        return view('lost.show',compact('pet','similars'));
    }
}
