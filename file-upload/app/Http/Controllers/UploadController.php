<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('files.upload');
    }

    // public function store(Request $request){
    //     return $request->file('file')->store('docs');
    // }

    public function store(Request $request)
    {
        // Validate the file input
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Get file data
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $fileMimeType = $request->file->getClientMimeType();
        $fileData = file_get_contents($request->file->getRealPath());

        // Save the file data to the database
        $file = new File();
        $file->name = $fileName;
        $file->mime_type = $fileMimeType;
        $file->file_data = $fileData;
        $file->save();

        return back()->with('success', 'File uploaded and stored in the database successfully');
    }
}
