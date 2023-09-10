<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;


class PetController extends Controller
{
    //Aqui controlaremos las publicaciones
    public function index()
    {
        //Recuperar registros de mascotas perdidos
        $pets = Pet::where('status',1)->get();
        
        //Le pasamos esos registros a la vista
        return view('pets.index',compact('pets'));
    }
}
