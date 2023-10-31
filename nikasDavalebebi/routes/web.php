<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [QuizController::class, 'index']);
Route::get('/quizzes/create', [QuizController::class, 'savePage']);
Route::get('/quizzes/{id}/update', [QuizController::class, 'savePage']);
Route::post('/quizzes', [QuizController::class, 'createOrUpdate']);
