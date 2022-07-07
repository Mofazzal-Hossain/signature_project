<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

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
}
