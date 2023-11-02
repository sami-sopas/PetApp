<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function donated()
    {
        return view('donate.thank-you');
    }

}
