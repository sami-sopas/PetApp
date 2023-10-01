<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PetController;

/* AQUI ESTARAN TODAS LAS RUTAS A LAS QUE PODRAN ACCEDER
   USUARIOS YA AUTENTICADOS */


//Ruta resource para operaciones crud de sus publicaciones sobre mascotas
Route::resource('posts',PetController::class);
