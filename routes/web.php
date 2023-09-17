<?php

use App\Http\Controllers\AdoptPetController;
use App\Http\Controllers\LostPetController;
use Illuminate\Support\Facades\Route;

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


//Vista del inicio
Route::get('/', function () {
    return view('home');
});

//Vista del inicio
Route::get('/home', function () {
    return view('home');
})->name('home');

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

//Buscar mascota segun los parametros que de el usuario
Route::get('adoptar/buscar',[AdoptPetController::class,'search'])->name('adoptar.search');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
