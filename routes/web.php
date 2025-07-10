<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;

Route::get('/', [IndexController::class, 'index']);

Route::get('/about', [IndexController::class, 'about']);

Route::get('/contact', [IndexController::class, 'contact']);

Route::get('/job', [JobController::class, 'index']);


Route::get('/blog' , [PostController::class, 'index']);

Route::get('/blog/create' , [PostController::class, 'create']);

Route::get('/blog/{id}', [PostController::class, 'show']);

Route::get('/comment' , [CommentController::class, 'index']);

Route::get('/comment/create' , [CommentController::class, 'create']);
