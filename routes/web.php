<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\UniversitasController;
use App\Http\Controllers\PerbandinganController;

Route::get('/', function () {
    return view('home');
});

// Route::get('/perguruan-tinggi', [UniversitasController::class, 'index']);
Route::get('/perguruan-tinggi', [UniversitasController::class, 'index'])->name('perguruan-tinggi');


// Route::get('/beasiswa', function () {
//     return view('beasiswa');
// });
// Route::get('/beasiswa', function () {
//     return view('beasiswa');
// })->name('beasiswa');

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa');
Route::get('/beasiswa/{id}', [BeasiswaController::class, 'show'])->name('detailbeasiswa');


// Route::get('/berita', function () {
//     return view('berita');
// })->name('berita');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('detailberita');


// Route::get('/perbandingan', function () {
//     return view('perbandinganpt');
// });

Route::get('/perbandingan', [PerbandinganController::class, 'index'])->name('perbandingan');


// Route::get('/detail-perguruantinggi', function () {
//     return view('detailpt');
// })->name('detailpt');


Route::get('/perguruan-tinggi/{id}', [UniversitasController::class, 'show'])
->name('detailpt');


Route::get('/detail-beasiswa', function () {
    return view('detailbeasiswa');
});

Route::get('/detail-berita', function () {
    return view('detailberita');
});

// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
