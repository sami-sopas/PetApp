<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function getPdf(Request $request)
    {
        date_default_timezone_set('America/Mexico_City');

        $info = [

            'titulo' => 'REPORTE DE USUARIOS',

            'Numero_Usuarios' => $request->averageUsersPerWeek,
        ];

        $pdf = PDF::loadView('pdfReporte', $info);
        return $pdf->download('reporte.pdf');
    }
}
