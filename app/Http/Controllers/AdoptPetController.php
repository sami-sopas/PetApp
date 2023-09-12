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
        $pets = Pet::where('status',2)->latest('id')->paginate(8);

        return view('adopt.index',compact('pets'));
    }
}
