<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;


//Definicion de rutas de administrador
Route::get('',[AdminController::class, 'index'])->name('admin.index');

//Resorce route de categorias
Route::resource('categories',CategoryController::class); //->name('admin.categories');

//Resorce route de colores
Route::resource('colors',ColorController::class);

//Resource route para la tabla de tags (la que es de N:N)
Route::resource('tags',TagController::class);