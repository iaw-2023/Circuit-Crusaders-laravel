<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/motos',[ApiController::class,'motos']);
Route::get('/estilos',[ApiController::class,'estilos']);
Route::get('/motos/estilos/{id_estilo}',[ApiController::class,'motosPorEstilo']);
Route::get('/motos/marca/{marca}',[ApiController::class,'motosPorMarca']);
Route::post('/pedido',[ApiController::class,'pedido']);




