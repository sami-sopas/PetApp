<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class AdoptPetController extends Controller
{
    public function index(Request $request)
    {

        return view('adopt-pet.index');

    }

}
