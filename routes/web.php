<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\BlogController::class, 'homepage']);
Route::get('/admin', function () {
    return view('admin/home');
})->middleware('auth');
Route::resource('admin/posts', PostController::class)->middleware('auth');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{username}', [App\Http\Controllers\BlogController::class, 'postsByUser']);
Route::get('/{username}/{slug}', [BlogController::class, 'showBlogDetails'])
    ->where('slug', '[\w\d-]+') // Restricting the slug to word characters, digits, and hyphens
    ->name('posts.show');
