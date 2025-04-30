<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/article', [PostController::class, 'index'])->name('article.index');
    Route::get('/addArticle', [PostController::class, 'addPost'])->name('article.addPost');
    Route::get('/UpdateArticle/{id}', [PostController::class, 'updatePost'])->name('article.updatePost');
    Route::post('/article', [PostController::class, 'store'])->name('article.store');
    Route::put('/article/{id}', [PostController::class, 'update'])->name('article.update');
    Route::delete('/article/{id}', [PostController::class, 'destroy'])->name('article.destroy');

    Route::get('/video', [VideoController::class, 'index'])->name('video.index');
    Route::get('/addVideo', [VideoController::class, 'addVideo'])->name('video.addVideo');
    Route::get('/UpdateVideo/{id}', [VideoController::class, 'updateVideo'])->name('video.updatePost');
    Route::post('/video', [VideoController::class, 'store'])->name('video.store');
    Route::put('/video/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::delete('/video/{id}', [VideoController::class, 'destroy'])->name('video.destroy');
});

require __DIR__.'/auth.php';
