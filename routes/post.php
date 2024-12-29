<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Post auth Channels
|--------------------------------------------------------------------------
 
*/
Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    
    // Post Create
    Route::get('/create', function () {
        return view('posts.create');
    })->name('create');
    // Edit
    Route::get('/{post}/edit', function (Post $post) {
        return view('posts.edit', ['post' => $post]);
    })->middleware('can:update-post,post')->name('edit');

});