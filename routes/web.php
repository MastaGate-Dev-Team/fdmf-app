<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VolunteerController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $recentPost = Post::orderBy('created_at', 'desc')->take(3)->get();
    return view('siteView.index')->with(['recentPosts' => $recentPost]);
})->name('site.home');

Route::get('/about', function () {
    return view('siteView.about');
});

Route::get('/services', function () {
    return view('siteView.service');
});

Route::get('/videos', [VideoController::class, 'indexPage']);

Route::get('/news', function () {
    $posts = Post::all();
    $recentPost = Post::orderBy('created_at', 'desc')->take(3)->get(); 
    return view('siteView.blog')->with(['posts' => $posts, 'recentPosts' => $recentPost]);
});

Route::get('/news/{id}', function ($id) {
    $post = Post::findOrFail($id);
    return view('siteView.blogDetails')->with(['post' => $post]);
})->name('blogD.show');

Route::get('/contact', function () {
    return view('siteView.contact');
});

Route::get('/inscription', function () {
    return view('siteView.inscription');
});

Route::get('/dashbord',[DashbordController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

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

    Route::get('/benevoles', [VolunteerController::class, 'index'])->name('volunteer.index');
    Route::get('/addbenevole', [VolunteerController::class, 'addVolunteer'])->name('volunteer.addVolunteer');
    Route::post('addbenevole', [VolunteerController::class, 'store'])->name('volunteer.store');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
});

require __DIR__.'/auth.php';
