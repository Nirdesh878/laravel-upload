<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/user', fn(Request $request) => $request->user())->middleware('auth:sanctum'); 
Route::post('/upload', [FileController::class, 'upload']);
Route::get('/files/search', [FileController::class, 'search']);

