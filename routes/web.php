<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;


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

require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/allPost', [PostController::class, 'showPosts']);
Route::get('/post/{id}', [PostController::class, 'postDetails']);

Route::get('/post', function () {
    return view('post');
});

Route::get('/search', [SearchController::class, 'search']);

Route::post('/post/comment', [CommentController::class, 'comment'])->middleware(['auth']);

