<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz;
//use App\Models\Question;

class AdminController extends Controller
{
    public $questions = 0;

    //load panel w/ data
    public function show () {

        return view('admin');
    }

    //load data to admin page
    public function showQuiz() {

        $questions = Quiz::where('id', '>=', 0)
                        ->orderby('id')
                        ->get();

        return view('adminquiz')->with('questions', $questions);
    }

    public function deleteQuestion(Request $request) {

        $question = $request->input('question_id');

        Quiz::where('id', $question)->delete();

        return redirect('/adminquiz');
    }

    //create db rows via model
    public function createQuestion(request $request) {

        Quiz::create([
            "question" => $request->input('questionInput'),
            "answer1" => $request->input('answer1Input'),
            "answer2" => $request->input('answer2Input'),
            "answer3" => $request->input('answer3Input'),
            //correcte antwoord
            "correct_answer" => $request->input('correctAnswerInput'),
            //hint
            "hint" => $request->input('hintInput')
        ]);

        return redirect('adminquiz');
    }

}
