<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigatieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuizController;

Route::controller(NavigatieController::class)->group(function () {
    //Route::get('naam blade file', 'method naam in SpelerController')->name('naam');
    Route::get('/home', 'index')->name('homeNav');
    Route::get('/rechter', 'rechter')->name('rechterNav');
    Route::get('/matroos', 'matroos')->name('matroosNav');
    Route::get('/hint', 'showHint')->name('hintNav');
    Route::get('/oordeel', 'oordeel')->name('oordeelNav');
    Route::get('/resultaat', 'resultaat')->name('resultaatNav');
    Route::get('/sluiten', 'sluiten')->name('sluitenNav');
    Route::get('/credits', 'credits')->name('creditsNav');
    Route::get('/foto', 'foto')->name('fotoNav');
});

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', function () {
        return view('adminquiz');
    })->middleware(['auth', 'verified'])->name('dashboard');

    //Route::get('naam blade file', 'method naam in AdminController')->name('Leuke naam');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/adminquiz', [AdminController::class, 'showQuiz']);
    Route::post('/adminquiz', [AdminController::class, 'createQuestion']);
    Route::post('/adminquiz/deleteQuestion', [AdminController::class, 'deleteQuestion']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
