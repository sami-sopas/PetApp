<?php

use App\Livewire\LikeListComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\DomPdfController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\LostPetController;
use App\Http\Controllers\AdoptCatController;
use App\Http\Controllers\AdoptDogController;
use App\Http\Controllers\AdoptPetController;
use App\Http\Controllers\User\PetController;
use App\Http\Controllers\User\UserController;
use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use App\Livewire\Users;

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

//Formulario de crear publicacion de doggo
Route::get('adopt-dog/create',[AdoptDogController::class,'create'])->name('adopt-dog.create');

//Guardar lo de form de create para doggos
Route::post('adopt-dog', [AdoptDogController::class, 'store'])->name('adopt-dog.store');

//Mostrar cattos para adoptar
Route::get('adopt-cat',[AdoptCatController::class,'index'])->name('adopt-cat.index');

//Formulario de crear publicacion de catto
Route::get('adopt-cat/create',[AdoptCatController::class,'create'])->name('adopt-cat.create');

//Guardar lo de form de create para gattos
Route::post('adopt-cat',[AdoptCatController::class,'store'])->name('adopt-cat.store');

//Mostrar mascotas en adopcion
Route::get('adoptar',[AdoptPetController::class,'index'])->name('adopt-pet.index');

//Guardar lo de form de create pets
Route::get('adopt-pet',[AdoptPetController::class,'create'])->name('adopt-pet.create');

//Guardar lo de form de create para pets
Route::post('adopt-pet',[AdoptPetController::class,'store'])->name('adopt-pet.store');



//Mostrar esa mascota
Route::get('adopt-pet/pet/{pet}',[AdoptPetController::class,'show'])->name('adopt-pet.show');

// RUTAS PARA AVISTAMIENTOS---------------------------------------------------------

//Mostrar mascotas perdidas
Route::get('avistamientos',[LostPetController::class,'index'])->name('avistamientos.index');

//Mostrar mostrar detalles de una mascota perdida
Route::get('avistamientos/mascota/{pet}',[LostPetController::class,'show'])->name('avistamientos.show');

// RUTAS PARA ADOPCIONES------------------------------------------------------------

//Mostrar mostrar detalles de una mascota para adoptar
Route::get('adoptar/mascota/{pet}',[AdoptPetController::class,'show'])->name('adoptar.show');

//Buscar mascota segun los parametros que de el usuario (filtrar)
Route::get('adoptar/buscar',[AdoptPetController::class,'search'])->name('adoptar.search');

//Regresa la vista para el formulario de crear mascota en adopcion
Route::get('adoptar/create',[AdoptPetController::class,'create'])->name('adoptar.create');


Route::get('user',[UserController::class,'index'])->name('user.index');

//Mostrar publicaciones creadas x el user (AHUEVO TUVE QUE USAR ESE CONTROLADOR POR CULPA DEL RESOURCE QUE NOSESE QUE PEDO)
// Route::get('user/pet',[PetController::class,'index'])->name('post.index');
// Route::get('user/pet/{pet}/edit',[PetController::class,'edit'])->name('post.edit');
// Route::post('user/pet/{pet}',[PetController::class,'update'])->name('post.update');
Route::resource('pet',PetController::class); //name('pet.algo')


//Manejar el pedo de las donaciones
Route::get('donate',[DonateController::class,'index'])->name('donate.index');
Route::get('donate/{opc}',[DonateController::class,'show'])->name('donate.show');
Route::get('thank-you/{opc}',[DonateController::class,'donated'])->name('donate.finished');

//Ver mascotas likeadas
Route::get('likes',LikeListComponent::class)->name('likelist');

//Genera PDF
Route::post('/pdf', [PDFController::class, 'getPdf'])->name('pdf');

//Desmadre
Route::get('/chat',Index::class)->name('chat.index');
Route::get('/chat/{query}',Chat::class)->name('chat');
Route::get('/users',Users::class)->name('users');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
