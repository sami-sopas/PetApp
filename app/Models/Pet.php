<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //Relacion uno a muchos de post le pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Una categoria, le pertenece a una mascota
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Un color, le pertenece a una mascota
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    //Relacion muchos a muchos con tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica con img
    public function images()
    {
        //Se le pasa el parametro y el nombre del metodo al que hace referencia
        return $this->morphMany(Image::class,'imageable');
    }
}
