<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sejarah', function () {
    return view('profiledesa.sejarah');
})->name('SejarahDesa');

Route::get('/dashboard', [PostController::class, 'index'])->name('UserDashboard');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');


