<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tags = Tag::all();

        return view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|unique:tags'
        ]);

        Tag::create($request->all());

        return redirect()->route('tags.index')->with('info','El tag ' . $request->name . ' fue agregado correctemente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|max:100|unique:tags'
        ]);

        $tag->update($request->all());

         //Info es lo que regresamos para indicar que se actualizo correctamente 
         return redirect()->route('tags.edit',$tag)->with('info','El tag ha sido actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        //Tambien le enviamos una variable como sesion para notificar que se elimino
        return redirect()->route('tags.index')->with('info','El tag se ha eliminado correctamente');
    }
}
