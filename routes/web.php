<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Predefined root route - Shows the welcome page we show when we ran the app for the first time.

Route::get('/', function () {
    return view('home');
});
	Route::get('/blog/blog', function () {
		return view('blog/blog');
			})->name('blog.blog');
		Route::get('/blog/blog', function () {
				$posts = BlogPost::all();
					return view('blog/blog', ['posts' => $posts]);
						})->name('posts');
Route::get('/blog/newuser', function () {
    return view('blog/newuser');
});

Route::get(
'/blog/bl',
[\App\Http\Controllers\BlogPostController::class, 'take']
)->name('blog.create');

Route::get(
'/blog/blog.create',
[\App\Http\Controllers\BlogPostController::class, 'create']
)->name('blog.create');

Route::get(
'/blog/create.store',
[\App\Http\Controllers\BlogPostController::class, 'store']
)->name('blog.create');

Route::get(
'/blog/blog.edit/{blogPost}',
[\App\Http\Controllers\BlogPostController::class, 'edit']
)->name('blog.edit');

Route::get(
'/blog/blog.show/{blogPost}',
[\App\Http\Controllers\BlogPostController::class, 'show']
)->name('blog.show');

Route::put(
'/blog/blog.edit/{blogPost}',
[\App\Http\Controllers\BlogPostController::class, 'update']
)->name('blog.update');

Route::get(
'/blog/blog.destroy/{blogPost}',
[\App\Http\Controllers\BlogPostController::class, 'destroy']
)->name('blog.destroy');
