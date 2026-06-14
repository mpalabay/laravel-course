<?php

use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PawiController;

Route::get('/', [PawiController::class, 'index']);
Route::post('/pawis', [PawiController::class, 'store']);
Route::get('/pawis/{pawi}/edit', [PawiController::class, 'edit']);
Route::put('/pawis/{pawi}', [PawiController::class, 'update']);
Route::delete('/pawis/{pawi}', [PawiController::class, 'destroy']);

// REGISTER ROUTES
Route::view('/register', 'auth.register')->middleware('guest')->name('register');
Route::post('/register', Register::class)->middleware('guest');

// LOGOUT ROUTES
Route::post('/logout', Logout::class)->middleware('auth');
