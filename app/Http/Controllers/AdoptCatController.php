<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdoptCatController extends Controller
{
    public function index()
    {
        return view('adopt-cat.index');
    }

    public function create()
    {

        //Informacion a mostrar en el form
        $colors = Color::all();

        $sizes = Pet::select('size')->distinct()->get();

        $ages = Pet::select('age')->distinct()->get();

        $states = State::all();

        $tags = Tag::all();

        $sexs = Pet::select('sex')->distinct()->get();

        $bg_colors = Pet::select('bg_color')->distinct()->get();

        $icons = Pet::select('icon')->distinct()->get();


        return view('adopt-cat.create',compact(
            'colors',
            'sizes',
            'ages',
            'states',
            'tags',
            'sexs',
            'bg_colors',
            'icons',
        ));

    }

    //Guardar en BD
    public function store(Request $request)
    {
        //Obtener el archivo temporal donde se guardada
        //($request->file('file')->getPathname());
        //$path = Storage::put('pets', $request->file('file')); pets/qdb4SVcHphIDt9mfDXnvbxx2NKxRUZZyfyiWt11m.png
        //$url = Storage::url($path); http.petapp.test/pets/qdb4SVcHphIDt9mfDXnvbxx2NKxRUZZyfyiWt11m.png
        

        //Luego validamos
        $request->validate([
            'name' => 'required|max:255',
            'color_id' => 'required|integer',
            'size' => 'required|max:255',
            'sex' => 'required|max:255',
            'age' => 'required|max:255',
            'description' => 'required',
            'tags' => 'required',
            'bg_color' => 'required',
            'icon' => 'required',
            'files.*' => 'image|max:2048',
            'files' => 'required|max:3'
        ]);

        //Definir que sera publicacion para gato
        $request->merge(['category_id' => 2]);

        //Agregar el user_id al que pertenece la publicacion
        $request->merge(['user_id' => Auth::id()]);

        //Agregar que el status sera en adopcion (1)
        $request->merge(['status' => 1]);

        //Guardar en BD la informacion enviada del formulario
        $cat = Pet::create($request->all());

        //Agregar imagenes
        foreach ($request->file('files') as $file) {
            $url = Storage::put('pets', $file);
            $cat->images()->create([
                'url' => $url
            ]);
        }
        // $url = Storage::put('pets', $request->file('file'));

        // $dog->image()->create([
        //     'url' => $url
        // ]);

        //Agregar los tags del select multiple (de la tabla M:M)
        $cat->tags()->attach($request->tags);


        //Redirigimos a la publicacion ya hecha
        return redirect()->route('pet.show',$cat)->with('info','Se ha creado la publicación correctamente !');


    }
}
