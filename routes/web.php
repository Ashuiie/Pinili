<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);         // View all
Route::get('/posts/create', [PostController::class, 'create']); // Create form
Route::post('/posts', [PostController::class, 'store']);        // Save to database


Route::get('/', function () {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
});
