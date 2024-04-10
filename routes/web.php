<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/feedback', [FeedbackController::class, 'index']);
Route::get('/feedback/new', [FeedbackController::class, 'new']);
Route::post('/feedback/create', [FeedbackController::class, 'create']);

// TODO: Edit should be available only for authenticated users
Route::get('/feedback/edit/{id}', [FeedbackController::class, 'edit']); 
Route::post('/feedback/update/{id}', [FeedbackController::class, 'update']);

Route::get('/feedback/delete/{id}', [FeedbackController::class, 'delete']);
Route::post('/feedback/destroy/{id}', [FeedbackController::class, 'destroy']);