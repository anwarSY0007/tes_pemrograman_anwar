<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\{DasboardController,FiboController,AlgoritmaController,EnkripController};
use Illuminate\Support\Facades\Route;


Route::get('/', DasboardController::class);
Route::get('/fibo', FiboController::class);
Route::get('/enkrip', [EnkripController::class, 'index']);
Route::post('/encrypt', [EnkripController::class, 'encrypt'])->name('encrypt');
Route::post('/decrypt', [EnkripController::class, 'decrypt'])->name('decrypt');
Route::get('/algoritma', AlgoritmaController::class);

// Route::get('/', function () {
//     Route::get('/', DashboardController::class);
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
