<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    function index()
    {
        //Pakt alle quiz vragen van de model Quiz (de Quiz model is de Questions table)
        $quizQuestions = Quiz::All();
        //Maakt een nieuwe, lege array aan
        $quizQuestionsArray = [];
        //Vult de array met elke vraag uit de DB
        foreach($quizQuestions as $quizQuestion){
        $quizQuestionsArray[] = [
            "question" => "$quizQuestion->question",
            "answers" => [
              "a" => "$quizQuestion->answer1",
              "b" => "$quizQuestion->answer2",
              "c" => "$quizQuestion->answer3"
            ],
            "correctAnswer" => "$quizQuestion->correct_answer"];
        }
        //Gaat naar de quiz view en geeft de array met vragen mee onder de variabele "myQuestions"
        return view('quiz', ['myQuestions' => $quizQuestionsArray]);
    }
}
