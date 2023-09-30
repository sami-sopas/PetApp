<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'unique:categories|required|max:50'
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')->with('info','La categoria ' . $request->name . ' fue agregada correctemente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'unique:categories|required|max:50'
        ]);

        $category->update($request->all());

        //Info es lo que regresamos para indicar que se actualizo correctamente 
        return redirect()->route('categories.edit',$category)->with('info','La categoria se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        //Tambien le enviamos una variable como sesion para notificar que se elimino
        return redirect()->route('categories.index')->with('info','La categoria se elimino correctamente');
    }
}
