<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


//Definicion de rutas de administrador
Route::get('',[AdminController::class, 'index'])->name('admin.index');