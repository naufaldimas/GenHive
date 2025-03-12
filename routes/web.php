<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/result', [SongController::class, 'predict'])->name('result');

Route::get('/loading', function () {
    return view('loading');
});
