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


Route::post('register', [ApiController::class, 'register']);
Route::post('login', [ApiController::class, 'login']);
Route::post('/process_payment',[ApiController::class,'mercadoPago']);

Route::group( ['middleware' => ["auth:sanctum"]], function(){
    Route::post('/pedido',[ApiController::class,'pedido']);
    Route::post('/sendConfirmationMail',[ApiController::class,'sendConfirmationMail']);
    Route::get('user-profile', [ApiController::class, 'userProfile']);
    Route::get('logout', [ApiController::class, 'logout']);
    Route::get('historial', [ApiController::class, 'getOrderHistory']);
});

Route::middleware('auth:sanctum')->get('/cliente', function (Request $request) {
    return $request->cliente();
});



