<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $data =$request->file('file');
        $domPdfPath = base_path('vendor/dompdf/dompdf');
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
        $Content=IOFactory::load($data); 
        $PDFWriter=IOFactory::createWriter($Content,'PDF');
        $PDFWriter->save(public_path("pdf/abcd.pdf")); 

        return redirect('welcome');
       
    }
}
