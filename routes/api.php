<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('post', PostController::class);

Route::apiResource('tags', TagController::class);

Route::apiResource('comments', CommentController::class);
