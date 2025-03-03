<?php

use App\Http\Controllers\BuilderController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/builder', [BuilderController::class, 'index']);

Route::post('/resume', [ResumeController::class, 'build']);
