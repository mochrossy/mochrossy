<?php

use App\Http\Controllers\Admin\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Blog (Public)
|--------------------------------------------------------------------------
*/
Route::get('/blog', function () {
    return view('pages.blog.index', [
        'posts' => Post::latest('published_at')->get(),
    ]);
})->name('blog.index');

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('pages.blog.show', ['post' => $post]);
})->name('blog.show');

/*
|--------------------------------------------------------------------------
| Admin — CRUD Post
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('posts', PostController::class);
});
