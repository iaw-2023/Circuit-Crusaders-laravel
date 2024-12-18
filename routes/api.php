<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use MercadoPago\Payment;


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
//Route::post('/process_payment',[ApiController::class,'mercadoPago']);

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



Route::post('/rest/process_payment', function (Request $request) {
    // Configurar Mercado Pago con el access token
    \MercadoPago\SDK::setAccessToken(env('MERCADO_PAGO_ACCESS_TOKEN'));

    try {
        // Crear un pago usando los datos enviados desde el frontend (CardPayment Brick)
        $payment = new Payment();
        $payment->transaction_amount = $request->input('transaction_amount'); // Monto a pagar
        $payment->token = $request->input('token'); // Token de la tarjeta generada por el Brick
        $payment->description = $request->input('description'); // Descripción del pago
        $payment->installments = $request->input('installments'); // Cantidad de cuotas
        $payment->payment_method_id = $request->input('payment_method_id'); // Método de pago (visa, mastercard, etc.)
        $payment->payer = [
            'email' => $request->input('payer')['email'] // Correo del cliente
        ];

        $payment->save();

        return response()->json([
            'status' => $payment->status,
            'status_detail' => $payment->status_detail,
            'id' => $payment->id
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Error al procesar el pago',
            'message' => $e->getMessage()
        ], 500);
    }
});

