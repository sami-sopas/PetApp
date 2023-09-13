<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    
    //Relacion de uno a uno
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
