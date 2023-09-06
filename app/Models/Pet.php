<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    //Relacion uno a muchos de post le pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Una categoria le pertenece
    public function category()
    {
        return $this->belongsTo(Cateogory::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    //Relacion muchos a muchos con tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica con img
    public function image()
    {
        //Se le pasa el parametro y el nombre del metodo al que hace referencia
        return $this->morphOne(Image::class,'imageable');
    }
}
