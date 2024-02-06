<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class QuizController extends Controller
{

    public function submitPhoto(Request $request) {

        $image = $request->file('path');

        //generates random file name based on time and extension
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public', $filename);

        Photo::create([
            "path" => $path
        ]);


        return redirect('/quiz');
    }
}
