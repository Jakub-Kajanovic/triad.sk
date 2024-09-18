<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class, 'index']);
Route::get('/dakujeme-za-spravu', [IndexController::class, 'submited'])->name('submited');
Route::post('/submit', [SubmissionController::class, 'store'])->name('submit');