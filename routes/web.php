<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PawiController;

Route::get('/', [PawiController::class, 'index']);
