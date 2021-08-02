<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
    public function uploadImages(Request $request)
    {
        $request->validate([
            'file' => 'required|image',
        ]);

        $request->file->store('.');

        return view('upload-image');
    }

    public function showUploadedImages(Request $request)
    {
        $imagesUrl = Storage::disk('s3')->allFiles('');

        return view('images', compact('imagesUrl'));
    }
}
