<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Color;
use App\Models\Category;
use App\Models\Tag;
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

//Tags
Breadcrumbs::for('tags', function (BreadcrumbTrail $trail) {
    $trail->push('Tags', route('tags.index'));
});

// Tags > Crear
Breadcrumbs::for('tags-create', function (BreadcrumbTrail $trail) {
    $trail->parent('tags');
    $trail->push('Crear', route('tags.index'));
});

// Tags > Editar > [Color]
Breadcrumbs::for('tags-edit', function (BreadcrumbTrail $trail,Tag $tag) {
    $trail->parent('tags');
    $trail->push($tag->name, route('tags.edit', $tag));
}); 

//------------------------------------------------------------------------

//Mascotas
Breadcrumbs::for('adopciones', function (BreadcrumbTrail $trail) {
    $trail->push('Mascotas');
});

// Mascotas > En adopcion
// Breadcrumbs::for('adopciones-index', function (BreadcrumbTrail $trail) {
//     $trail->parent('adopciones');
//     $trail->push('En adopcion', route('pets-adopt.index'));
// });

/* Tags > Editar > [Color]
Breadcrumbs::for('tags-edit', function (BreadcrumbTrail $trail,Tag $tag) {
    $trail->parent('tags');
    $trail->push($tag->name, route('tags.edit', $tag));
}); */

//------------------------------------------------------------------------
/*
// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});

*/