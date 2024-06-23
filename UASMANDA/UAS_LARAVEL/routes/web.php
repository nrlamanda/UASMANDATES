<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PasienController::class, 'index'])->name('pasien.index');

Route::get('/create', [PasienController::class, 'create'])->name('pasien.create');

Route::post('/create', [PasienController::class, 'store'])->name('pasien.store');

Route::get('/edit/{pasien:id}', [PasienController::class, 'edit'])->name('pasien.edit');

Route::post('/edit/{pasien:id}', [PasienController::class, 'update'])->name('pasien.update');

Route::delete('/delete/{pasien:id}', [PasienController::class, 'destroy'])->name('pasien.destroy');