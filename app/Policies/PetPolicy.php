<?php

namespace App\Policies;

use App\Models\Pet;
use App\Models\User;

class PetPolicy
{
    //Verificar que el usuario sea el creador de esa publicacion
    public function author(User $user,Pet $pet)
    {
        return $user->id == $pet->user_id;
    }
}
