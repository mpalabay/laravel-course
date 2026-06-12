<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PawiController;

Route::get('/', [PawiController::class, 'index']);
Route::post('/pawis', [PawiController::class, 'store']);
Route::get('/pawis/{pawi}/edit', [PawiController::class, 'edit']);
Route::put('/pawis/{pawi}', [PawiController::class, 'update']);
Route::delete('/pawis/{pawi}', [PawiController::class, 'destroy']);