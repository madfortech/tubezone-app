<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\SearchController;
use App\Models\Post;
use App\Models\Article;
/*
|--------------------------------------------------------------------------
| Writer auth Channels
|--------------------------------------------------------------------------
 
*/
Route::prefix('writer')->name('writer.')->group(function () {
    //  Create Article
    Route::get('/articles/create', function () {
        return view('admin/articles/create');
    })->name('article-create');
    // List Article
    Route::get('/articles', function () {
        return view('admin/articles/index');
    })->name('article-list');
    // Edit
    Route::get('/articles/{article}/edit', function (Article $article) {
        return view('admin/articles.edit', ['article' => $article]);
    })->name('edit-article');
});