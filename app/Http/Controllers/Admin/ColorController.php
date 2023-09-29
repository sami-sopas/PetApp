<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();

        return view('admin.colors.index',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'unique:colors|required|max:100'
        ]);

        Color::create($request->all());

        return redirect()->route('colors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        return view('admin.colors.show',compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view('admin.colors.edit',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        $request->validate([
            'name' => 'unique:colors|required|max:100'
        ]);

        $color->update($request->all());

        //Info es lo que regresamos para indicar que se actualizo correctamente 
        return redirect()->route('colors.edit',$color)->with('info','El color ha sido actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $color->delete();

        //Tambien le enviamos una variable como sesion para notificar que se elimino
        return redirect()->route('colors.index')->with('info','El color se ha eliminado correctamente');
    }
}
