<?php

namespace App\Observers;

use App\Models\Pet;
use Illuminate\Support\Facades\Storage;

class PetObserver
{
    /**
     * Handle the Pet "created" event.
     */
    public function created(Pet $pet): void
    {
        //
    }

    /**
     * Handle the Pet "updated" event.
     */
    public function updated(Pet $pet): void
    {
        //
    }

    /**
     * Handle the Pet "deleted" event.
     */

    //Este metodo se ejecuta antes de que se elimine la mascota
    public function deleting(Pet $pet): void
    {
        // ¿Tiene imágenes asociadas?
        if($pet->images){
            foreach($pet->images as $image) {
                Storage::delete($image->url);
            }
        }
    }
    /**
     * Handle the Pet "restored" event.
     */
    public function restored(Pet $pet): void
    {
        //
    }

    /**
     * Handle the Pet "force deleted" event.
     */
    public function forceDeleted(Pet $pet): void
    {
        //
    }
}
