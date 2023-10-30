<?php

namespace App\Http\Controllers\User;

use App\Models\Pet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::where('user_id',Auth()->user()->id)->get();

        return view('post.index',compact('pets'));
    }
}
