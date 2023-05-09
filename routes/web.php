<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\motoController;
use App\Http\Controllers\estiloController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('auth')->group(function () {
    Route::get('motos',[motoController::class,'index'])->name('motos.index');
    Route::get('motos/create',[motoController::class,'create'])->name('motos.create');
    Route::get('motos/edit/{nro_moto}', [motoController::class,'edit'])->name('motos.edit');
    Route::put('motos/{nro_moto}', [motoController::class,'update'])->name('motos.update');
    Route::post('motos', [motoController::class,'store'])->name('motos.store');
    Route::delete('motos/{nro_moto}', [motoController::class,'destroy'])->name('motos.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('estilos',[estiloController::class,'index'])->name('estilos.index');
    Route::get('estilos/create',[estiloController::class,'create'])->name('estilos.create');
    Route::get('estilos/edit/{nro_estilo}', [estiloController::class,'edit'])->name('estilos.edit');
    Route::put('estilos/{nro_estilo}', [estiloController::class,'update'])->name('estilos.update');
    Route::post('estilos', [estiloController::class,'store'])->name('estilos.store');
    Route::delete('estilos/{nro_estilo}', [estiloController::class,'destroy'])->name('estilos.destroy');
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
