<?php

use Illuminate\Support\Facades\Route;

Route::get('/post/{id}/comments', [\App\Http\Controllers\Api\CommentsController::class, 'list'])->name('comments.list');
Route::post('/post/{id}/comments/{parentId?}', [\App\Http\Controllers\Api\CommentsController::class, 'store'])->name('comment.store');
