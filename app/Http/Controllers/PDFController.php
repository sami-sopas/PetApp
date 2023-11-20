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
            'Usuarios_Prom' => $request->Usuarios,
            'PostPDF' => $request->Posts,
            'AdoptPDF' =>$request->Adopciones,
            'UsersPDF' =>$request->Usuario_General,
            'AdoptPDF' =>$request->Disponible,
            'ProcessPDF' =>$request->Proceso,
            'AdoptedPDF' =>$request->Adoptado,
        ];

        $pdf = PDF::loadView('pdfReporte', $info);
        return $pdf->download('reporte.pdf');
    }
}
