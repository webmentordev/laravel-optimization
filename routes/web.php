<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::select('title', 
        'slug', 
        'content', 
        'description')->limit(5000)->get()->toArray()
    ]);
});