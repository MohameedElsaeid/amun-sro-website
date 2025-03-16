
<?php

use Illuminate\Support\Facades\Route;

// Blog Routes
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', function () {
        return view('blog.index');
    });
    
    Route::get('/categories', function () {
        return view('blog.categories');
    });
    
    Route::get('/category/{slug}', function ($slug) {
        return view('blog.category', ['slug' => $slug]);
    });
    
    Route::get('/post/{slug}', function ($slug) {
        return view('blog.post', ['slug' => $slug]);
    });
    
    Route::get('/authors', function () {
        return view('blog.authors');
    });
    
    Route::get('/author/{slug}', function ($slug) {
        return view('blog.author', ['slug' => $slug]);
    });
    
    Route::get('/about', function () {
        return view('blog.about');
    });
});
