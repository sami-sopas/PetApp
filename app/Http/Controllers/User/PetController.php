<?php

namespace App\Http\Controllers\User;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::where('user_id',Auth()->user()->id)->get();

        return view('post.index',compact('pets'));
    }

    public function show(Pet $pet)
    {
        dd('show');
    }

    public function edit(Pet $pet)
    {
        //Aplicando la policy
        $this->authorize('author',$pet);

        //Informacion a mostrar en el form
        $categories = Category::all();
        $colors = Color::all();
        $statuses = Pet::select('status')->distinct()->get();
        $sizes = Pet::select('size')->distinct()->get();
        $ages = Pet::select('age')->distinct()->get();
        $states = State::all();
        $tags = Tag::all();
        $sexs = Pet::select('sex')->distinct()->get();

        return view('post.edit', compact(
            'pet',
            'categories',
            'colors',
            'statuses',
            'sizes',
            'ages',
            'states',
            'tags',
            'sexs'
        ));
    }

    public function update(Request $request, Pet $pet)
    {
        $this->authorize('author',$pet);

        $request->validate([
            'name' => 'required|max:255',
            'color_id' => 'required|integer',
            'size' => 'required|max:255',
            'sex' => 'required|max:255',
            'age' => 'required|max:255',
            'description' => 'required',
            'tags' => 'required',
            'files.*' => 'image|max:2048',
            'files' => 'max:3'
        ]);

        //Actualizar info
        $pet->update($request->all());

        //Se envia alguna imagen?
        if($request->hasFile('files')){
            //Eliminar las imagenes antiguas
            foreach($pet->images as $image){
                Storage::delete($image->url);
                $image->delete();
            }

            //Subir las nuevas imagenes
            foreach($request->file('files') as $file){
                $url = Storage::put('pets', $file);

                //Crear una nueva imagen
                $pet->images()->create([
                    'url' => $url
                ]);
            }
        }

        //Actualizar de la tabla M:M
        $pet->tags()->sync($request->tags);

        return redirect()->route('pet.edit',$pet)->with('info','La publicacion fue actualizada correctamente !');
    }

    public function destroy(Pet $pet)
    {
        $this->authorize('author',$pet);
        
        //Nota: Las imagenes asociadas se eliminan con un observer
        $pet->delete();

        return redirect()->route('posts.index')->with('info','La publicacion fue eliminada correctamente !');
    }
}
