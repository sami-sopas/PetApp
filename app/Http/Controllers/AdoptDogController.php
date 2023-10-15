<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoptDogController extends Controller
{
    public function index()
    {
        return view ('adopt-dog');
    }
}
