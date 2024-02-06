<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Photo;

class PhotoController extends Controller
{

    public function show() {

        $images = Photo::where('id', '>=', 0)
                        ->orderby('id')
                        ->get();

        return view('/adminphotos')->with('images', $images);
    }

    public function addPhoto(Request $request) {

        $image = $request->file('path');

        //generates random file name based on time and extension
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public', $filename);

        Photo::create([
            "path" => $path
        ]);


        return redirect('/adminphotos');
    }
}
