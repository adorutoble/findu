<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/perguruan-tinggi', function () {
    return view('perguruantinggi');
});

Route::get('/beasiswa', function () {
    return view('beasiswa');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/perbandingan', function () {
    return view('perbandinganpt');
});

Route::get('/detail-perguruantinggi', function () {
    return view('detailpt');
});

Route::get('/detail-beasiswa', function () {
    return view('detailbeasiswa');
});

Route::get('/detail-berita', function () {
    return view('detailberita');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
