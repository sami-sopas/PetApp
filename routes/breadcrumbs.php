<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Category;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.index'));
});

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

/*
// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});

*/