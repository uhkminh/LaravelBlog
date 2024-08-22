<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogpostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    #return view('welcome');

    $blogposts = GetBlogposts(top: 0, status: 1);

    return view('pages.homepage')->with('posts',$blogposts);
});

Route::resource('blogposts', BlogpostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
