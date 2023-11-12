<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoptCatController extends Controller
{
    public function index()
    {
        return view('adopt-cat.index');
    }
}
