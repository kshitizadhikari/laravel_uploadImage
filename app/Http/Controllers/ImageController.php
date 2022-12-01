<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadImage(Request $request){
        // dd($request->all());
        if($request->hasFile('imageUpload')){
            $image = $request->file('imageUpload');
            $image->store('images', 'public');
            $filePath = $image->store('images', 'public');

            dd($filePath);
            return back();
            
        }
    }
}