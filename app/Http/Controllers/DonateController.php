<?php

namespace App\Http\Controllers;

use App\Mail\ThankYou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DonateController extends Controller
{
    public function index()
    {
        //Opciones de donacion
        $opc1 = 25;
        $opc2 = 50;
        $opc3 = 100;

        return view('donate.index',compact(
            'opc1',
            'opc2',
            'opc3'
        ));
    }

    public function show($opc)
    {
        return view('donate.show',compact('opc'));
    }

    public function donated($opc)
    {

        //Enviar correo de agradecimiento a usuario autenticado (si es el caso)
        if(auth()->user()){
            Mail::to(auth()->user())->send(new ThankYou(auth()->user(),$opc));
        }

        return view('donate.thank-you');
    }

}
