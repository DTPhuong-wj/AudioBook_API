<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudioBookController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('audiobooks', [AudioBookController::class, 'index']);
Route::get('audiobooks/{id}', [AudioBookController::class, 'show']);
Route::post('audiobooks', [AudioBookController::class, 'store']);
Route::put('audiobooks/{id}', [AudioBookController::class, 'update']);
Route::delete('audiobooks/{id}', [AudioBookController::class, 'destroy']);