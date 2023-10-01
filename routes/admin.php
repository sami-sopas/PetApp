<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdoptPetController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

//AQUI ESTAN LAS RUTAS QUE SERAN ACCESIBLES SOLO PARA EL ADMIN


//Definicion de rutas de administrador
Route::get('',[AdminController::class, 'index'])->name('admin.index');

//Resorce route de categorias
Route::resource('categories',CategoryController::class); //->name('admin.categories');

//Resorce route de colores
Route::resource('colors',ColorController::class);

//Resource route para la tabla de tags (la que es de N:N)
Route::resource('tags',TagController::class);

//Resource route para los pets en adopcion (admin)
Route::resource('pets-adopt',AdoptPetController::class);