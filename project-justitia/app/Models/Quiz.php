<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //quizzes moet naar questions verandert worden
    protected $table = 'questions';
    protected $fillable = [
    'question',
    'answer1',
    'answer2',
    'answer3',
    'correct_answer',
    'hint'
    ];

    use HasFactory;
}
