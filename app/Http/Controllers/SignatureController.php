<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
 
    public function upload(Request $request)
    {
        $sign=new Signature;
        $uniq_id=uniqid();
        $folderPath = public_path('signatures/');
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . $uniq_id . '.' . $image_type;
        file_put_contents($file, $image_base64);
        
        $sign->signature=$uniq_id. '.' . $image_type;
        $sign->save();

        return back()->with('success', 'Successfully saved your signature');
    }

    public function show()
    {
       $data=Signature::orderBy('signature','desc')->get();
       return view('signature',['signature'=>$data]);
    }
}
