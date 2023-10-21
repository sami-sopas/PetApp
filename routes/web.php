<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LostPetController;
use App\Http\Controllers\AdoptCatController;
use App\Http\Controllers\AdoptDogController;
use App\Http\Controllers\AdoptPetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// AQUI ESTARAN LAS RUTAS QUE SERAN ACCESIBLES PARA TODO MUNDO


//Vista del inicio
Route::get('/', function () {
    return view('index');
});

//Mostrar doggos para adoptar
Route::get('adopt-dog',[AdoptDogController::class,'index'])->name('adopt-dog.index');

//Mostrar perro para adoptar
Route::get('adopt-dog/dog/{dog}',[AdoptDogController::class,'show'])->name('adopt-dog.show');

//Formulario de crear publicacion de doggo
Route::get('adopt-dog/create',[AdoptDogController::class,'create'])->name('adopt-dog.create');

//Mostrar cattos para adoptar
Route::get('adopt-cat',[AdoptCatController::class,'index'])->name('adopt-cat.index');


//Mostrar otro tipo de mascotas para adoptar
Route::get('adopt-pet',[AdoptPetController::class,'index'])->name('adopt-pet.index');

//Mostrar esa mascota
Route::get('adopt-pet/pet/{dpet}',[AdoptPetController::class,'show'])->name('adopt-pet.show');

// RUTAS PARA AVISTAMIENTOS---------------------------------------------------------

//Mostrar mascotas perdidas
Route::get('avistamientos',[LostPetController::class,'index'])->name('avistamientos.index');

//Mostrar mostrar detalles de una mascota perdida
Route::get('avistamientos/mascota/{pet}',[LostPetController::class,'show'])->name('avistamientos.show');

// RUTAS PARA ADOPCIONES------------------------------------------------------------

//Mostrar mascotas en adopcion
Route::get('adoptar',[AdoptPetController::class,'index'])->name('adoptar.index');

//Mostrar mostrar detalles de una mascota para adoptar
Route::get('adoptar/mascota/{pet}',[AdoptPetController::class,'show'])->name('adoptar.show');

//Buscar mascota segun los parametros que de el usuario (filtrar)
Route::get('adoptar/buscar',[AdoptPetController::class,'search'])->name('adoptar.search');

//Regresa la vista para el formulario de crear mascota en adopcion
Route::get('adoptar/create',[AdoptPetController::class,'create'])->name('adoptar.create');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
