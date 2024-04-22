<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('todos/done/{todo}', [TodoController::class, 'updateStatus']);
Route::apiResource('todos', TodoController::class);