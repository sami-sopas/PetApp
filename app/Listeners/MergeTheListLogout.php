<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Gloudemans\Shoppingcart\Facades\Cart;

class MergeTheListLogout
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Logout $event): void
    {
        //Eliminar registro anterior
        Cart::restore(auth()->user()->id);


        
        //Nuevo registro
        /* Cuando el usuario cierre sesion, pasamos el id del usuario
           para asociarlo a su carro y guardar sus items 
           (Se guardan en la tabla que publicamos) */
        Cart::store(auth()->user()->id);
    }
}
