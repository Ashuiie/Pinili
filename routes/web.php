<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
});
