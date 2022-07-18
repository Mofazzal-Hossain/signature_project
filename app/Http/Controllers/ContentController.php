<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentPdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function store(Request $request)
    {
        DB::Table('contents')->truncate();
        $data= new Content;
        $data->content=$request->content;
        $data->save();
        return redirect('content');
    }

    public function show(){
        $contents=Content::all();
        return view('content.index', ['contents'=>$contents]);
    }

    public function createPDF(Request $request)
    {
        DB::Table('content_pdfs')->truncate();
        $data=new ContentPdf;
        $data->content=$request->content;
        $data->save();
        return redirect('content/pdf');
    }
    

    public function showPDF() {
        $contents = ContentPdf::all();
        return view('content.pdf', ['contents'=>$contents]);

        // $contents=$contents->toArray();
        // view()->share('content.index',$contents);
        // $pdf = PDF::loadview('content.pdf', $contents);

        // return $pdf->download('pdf_file.pdf');


    }


}
