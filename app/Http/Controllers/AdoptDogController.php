<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Color;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdoptDogController extends Controller
{

    //En request recibimos los parametros de los filtros
    public function index(Request $request)
    {
        //Recuperar perros en adopcion
        //$dogs = Pet::where('status', 2)->where('category_id', 2)->get();

        //dd($request);
        $dogs = Pet::where('status',1)
                    ->where('category_id',1)
                       //Tamaño
                    ->when($request->size != null, function($query) use ($request) {
                        return $query->where('size',$request->size);
                    }) //Sexo
                    ->when($request->sex != null, function($query) use ($request) {
                        return $query->where('sex',$request->sex);
                    }) //Edad
                    ->when($request->age != null, function($query) use ($request) {
                        return $query->where('age',$request->age);
                    }) //Color
                    ->when($request->color, function ($query) use ($request) {
                        return $query->whereHas('color', function ($q) use ($request) {
                            $q->where('name', $request->color);
                        });
                    }) //Tags
                    ->when($request->tag != null, function ($query) use ($request) {
                        return $query->whereHas('tags', function ($q) use ($request) {
                            $q->where('tags.name', $request->tag);
                        });
                    }) //Estados
                    ->when($request->state, function ($query) use ($request) {
                        return $query->whereHas('user.state', function ($q) use ($request) {
                            $q->where('name', $request->state);
                        });
                    })
                    ->get();

        return view('adopt-dog.index',compact('dogs'));
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


        return view('adopt-dog.create',compact(
            'colors',
            'sizes',
            'ages',
            'states',
            'tags',
            'sexs'
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
            'files.*' => 'image|max:2048',
            'files' => 'required|max:3'
        ]);

        //Definir que sera para perro
        $request->merge(['category_id' => 1]);

        //Agregar el user_id al que pertenece la publicacion
        $request->merge(['user_id' => Auth::id()]);

        //Agregar que el status sera en adopcion (1)
        $request->merge(['status' => 1]);

        //Guardar en BD la informacion enviada del formulario
        $dog = Pet::create($request->all());

        //Agregar imagenes
        foreach ($request->file('files') as $file) {
            $url = Storage::put('pets', $file);
            $dog->image()->create([
                'url' => $url
            ]);
        }
        // $url = Storage::put('pets', $request->file('file'));

        // $dog->image()->create([
        //     'url' => $url
        // ]);

        //Agregar los tags del select multiple (de la tabla M:M)
        $dog->tags()->attach($request->tags);


        //Redirigimos a la publicacion ya hecha
        return redirect()->route('adopt-dog.index');


    }
}
