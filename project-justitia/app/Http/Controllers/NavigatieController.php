<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class NavigatieController extends Controller
{

    public $hints = 0;

    public function oordeel()    
    {return view('oordeel');}

    public function sluiten()    
    {return view('sluiten');}

    public function matroos()    
    {return view('matroos');}

    public function index()    
    {return view('home');}

    //laat de hint pagina zien met de kolommen question en hint voor de rechter kant
    public function showHint() {

        $hints = Quiz::where('id', '>=', 0)
                        ->orderby('id')
                        ->get();

        return view('hint')->with('hints', $hints);
    }

    public function resultaat()    
    {return view('resultaat');}

    public function rechter()    
    {return view('rechter');}

    public function quiz()    
    {return view('quiz');}

    public function credits()    
    {return view('credits');}

    public function foto()    
    {return view('foto');}
}
