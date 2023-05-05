<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< Updated upstream
=======

Route::middleware('auth')->group(function () {
    Route::get('motos',[motoController::class,'index'])->name('motos.index');
    Route::get('motos/create',[motoController::class,'create'])->name('motos.create');
    Route::get('motos/edit/{nro_moto}', [motoController::class,'edit'])->name('motos.edit');
    Route::put('motos/{nro_moto}', [motoController::class,'update'])->name('motos.update');
    Route::delete('motos/{nro_moto}', [motoController::class,'destroy'])->name('motos.destroy');
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
>>>>>>> Stashed changes
