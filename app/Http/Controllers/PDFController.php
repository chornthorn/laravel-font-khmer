<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function pdf()
    {
        $pdf = PDF::loadView('pdf',['mode' => 'utf-8', 'format' => 'A4-L']);
        return $pdf->stream();
    }
}
