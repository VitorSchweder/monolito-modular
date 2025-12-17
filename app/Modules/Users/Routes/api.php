<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Users\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::post('/', [UserController::class, 'store']);
Route::get('{id}', [UserController::class, 'show']);
