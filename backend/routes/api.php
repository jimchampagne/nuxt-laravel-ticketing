<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tasks', function() {
    return response()->json([
        ['id' => 1, 'title' => 'Buy groceries', 'completed' => false],
        ['id' => 2, 'title' => 'Read a book', 'completed' => true],
    ]);
})
;