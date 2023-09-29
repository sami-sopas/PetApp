<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Color;
use App\Models\Category;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.index'));
});

//------------------------------------------------------------------------

//Categorias
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->push('Categorias', route('categories.index'));
});

// Categorias > Crear
Breadcrumbs::for('categories-create', function (BreadcrumbTrail $trail) {
    $trail->parent('categories');
    $trail->push('Crear', route('categories.create'));
}); 

// Categorias > Editar > [Categoria]
Breadcrumbs::for('categories-edit', function (BreadcrumbTrail $trail,Category $category) {
    $trail->parent('categories');
    $trail->push($category->name, route('categories.edit', $category));
}); 

//------------------------------------------------------------------------

//Colores
Breadcrumbs::for('colors', function (BreadcrumbTrail $trail) {
    $trail->push('Colores', route('colors.index'));
});

// Colores > Crear
Breadcrumbs::for('colors-create', function (BreadcrumbTrail $trail) {
    $trail->parent('colors');
    $trail->push('Crear', route('colors.index'));
});

// Colores > Editar > [Color]
Breadcrumbs::for('colors-edit', function (BreadcrumbTrail $trail,Color $color) {
    $trail->parent('colors');
    $trail->push($color->name, route('colors.edit', $color));
}); 

//------------------------------------------------------------------------
/*
// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});

*/