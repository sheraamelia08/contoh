<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/home', [HomeController::class,"index"]);

Route::post('/create', [HomeController::class,"contact"]);

Route::get('/show', [HomeController::class,"show"]);

Route::get('/contacts/{id}/edit', [HomeController::class,"edit"]);
Route::put('/contacts/{id}', [HomeController::class,"update"]);
Route::delete('/contacts/{id}', [HomeController::class,"destroy"]);
Route::get('/input', [HomeController::class, 'input']);

