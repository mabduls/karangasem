<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Grouping routes under 'profiledesa'
Route::prefix('profiledesa')->group(function () {
    Route::get('/sejarah', function () {
        return view('profiledesa.sejarah');
    })->name('SejarahDesa');

    Route::get('/visimisi', function () {
        return view('profiledesa.visimisidesa');
    })->name('VisiMisiDesa');

    Route::get('/demografi', function () {
        return view('profiledesa.demografi');
    })->name('demografi');
});

// Grouping routes under 'kelembagaan'
Route::prefix('kelembagaan')->group(function () {
    Route::get('/pemerintahdesa', function () {
        return view('kelembagaan.pemerintahdesa');
    })->name('PemerintahDesa');
    Route::get('/badanpemerintahan', function () {
        return view('kelembagaan.bpd');
    })->name('BadanPemerintahanDesa');
    Route::get('/lembagapemberdayaan', function () {
        return view('kelembagaan.lpmd');
    })->name('LembagaPemberdayaan');
    Route::get('/karangtaruna', function () {
        return view('kelembagaan.karangtaruna');
    })->name('karangtaruna');
});

// Grouping routes under 'Statistik Desa'
Route::prefix('statistikdesa')->group(function () {
    Route::get('/agama', function () {
        return view('statistikdesa.agama');
    })->name('Agama');
    Route::get('/pekerjaan', function () {
        return view('statistikdesa.pekerjaan');
    })->name('Pekerjaan');
    Route::get('/pendidikan', function () {
        return view('statistikdesa.pendidikan');
    })->name('Pendidikan');
    Route::get('/kesehatan', function () {
        return view('statistikdesa.kesehatan');
    })->name('Kesehatan');
});

Route::get('/dashboard', [PostController::class, 'index'])->name('UserDashboard');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');


