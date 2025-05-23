<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::post('posts', [PostController::class, 'store']);
Route::get('posts/{id}/edit', [PostController::class, 'edit']);
Route::put('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/{id}/destroy', [PostController::class, 'destroy']);
Route::post('posts/{id}', [PostController::class, 'show']);
