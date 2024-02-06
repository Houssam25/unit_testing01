<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request\UploadFileRequest;

use Illuminate\Support\Facades\Storage;

class LearnController extends Controller
{
  

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            return response()->json(['message' => 'File uploaded successfully'], 200);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    }

    


}
