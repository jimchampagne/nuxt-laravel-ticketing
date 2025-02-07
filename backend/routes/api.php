<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Resources

Route::apiResource('projects', ProjectController::class);
Route::apiResource('projects.boards', BoardController::class);
Route::apiResource('boards', BoardController::class);
Route::apiResource('boards.tickets', TicketController::class);
Route::apiResource('tickets', TicketController::class);

// Auth

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
