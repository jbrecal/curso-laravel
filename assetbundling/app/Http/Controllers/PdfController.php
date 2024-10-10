<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;



class PdfController extends Controller
{
    public function download()
    {
        $data = 'Juan Brenes';
        $pdf = Pdf::loadView('pdf.example',['data'=> $data]);
        return $pdf->download('my-example.pdf');
    }
    public function index()
    {
        return view('welcome');
    }
}
