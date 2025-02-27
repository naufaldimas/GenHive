<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return "test";
});

Route::post('/result', [SongController::class, 'predict'])->name('result');
