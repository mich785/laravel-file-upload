<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('files.upload');
    }

    public function store(Request $request){
        return $request->file('file')->store('docs');
    }
}
