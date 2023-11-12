<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Auth\Events\Login;

class MergeTheList
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
    public function handle(Login $event): void
    {
        //Verificar cada que inicie sesion de que tengo un registro en la tabla de shopping cart
        Cart::restore(auth()->user()->id);
    }
}
