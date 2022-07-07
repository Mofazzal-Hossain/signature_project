<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentPdf;
use Illuminate\Http\Request;
use PDF;

class ContentController extends Controller
{
    public function store(Request $request)
    {
        $data= new Content;
        $data->content=$request->content;
        $data->save();
        
        return back()->with('success', 'Upload file in your datebase');
    }

    public function show(){
        $contents=Content::all();
        
        return view('content.index', ['contents'=>$contents]);
    }

    public function createPDF(Request $request)
    {
        $data=new ContentPdf;
        $data->content=$request->content;
        $data->save();
        return view('content.pdf');
    }
    

    public function showPDF() {
        $contents = ContentPdf::first();

        $contents=$contents->toArray();
        view()->share('content.index',$contents);
        $pdf = PDF::loadview('content.pdf', $contents);

        return $pdf->download('pdf_file.pdf');
    }


}
