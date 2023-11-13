<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdoptPetController extends Controller
{
    public function index()
    {

        return view('adopt-pet.index');

    }

    public function create()
    {

        //Informacion a mostrar en el form

        //Las categorias que podra cambiar son solo para mascotas que no sean cat o dog
        $categories = Category::where('id','!=',1)->where('id','!=',2)->get();

        $colors = Color::all();

        $sizes = Pet::select('size')->distinct()->get();

        $states = State::all();

        $tags = Tag::all();

        $sexs = Pet::select('sex')->distinct()->get();

        $bg_colors = Pet::select('bg_color')->distinct()->get();

        $icons = Pet::select('icon')->distinct()->get();


        return view('adopt-pet.create',compact(
            'categories',
            'colors',
            'sizes',
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
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required',
            'color_id' => 'required|integer',
            'size' => 'required|max:255',
            'sex' => 'required|max:255',
            'description' => 'required',
            'tags' => 'required',
            'bg_color' => 'required',
            'icon' => 'required',
            'files.*' => 'image|max:2048',
            'files' => 'required|max:3'
        ]);


        //Agregar el user_id al que pertenece la publicacion
        $request->merge(['user_id' => Auth::id()]);

        //Agregar que el status sera en adopcion (1)
        $request->merge(['status' => 1]);

        //Guardar en BD la informacion enviada del formulario
        $pet = Pet::create($request->all());

        //Agregar imagenes
        foreach ($request->file('files') as $file) {
            $url = Storage::put('pets', $file);
            $pet->images()->create([
                'url' => $url
            ]);
        }
        // $url = Storage::put('pets', $request->file('file'));

        // $dog->image()->create([
        //     'url' => $url
        // ]);

        //Agregar los tags del select multiple (de la tabla M:M)
        $pet->tags()->attach($request->tags);


        //Redirigimos a la publicacion ya hecha
        return redirect()->route('pet.show',$pet)->with('info','Se ha creado la publicación correctamente !');
    }

}
