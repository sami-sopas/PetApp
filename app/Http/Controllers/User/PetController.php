<?php

namespace App\Http\Controllers\User;

use App\Models\Pet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Vista en donde el usuario podra ver sus publicaciones

        //Mostramos las mascotas que coincidan con el ID del usuario autenticado (actual)
        $pets = Pet::where('user_id', auth()->user()->id);

        return view('profile.pets',compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //De esto se encarga el AdoptPet y LostPet controller respectivamente
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
